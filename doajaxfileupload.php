<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(1);

$error = "";
$fileElementName = $_GET['n'];
if(!empty($_FILES[$fileElementName]['error'])){
    switch($_FILES[$fileElementName]['error']){
        case '1':
            $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
            break;
        case '2':
            $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
            break;
        case '3':
            $error = 'The uploaded file was only partially uploaded';
            break;
        case '4':
            $error = 'No file was uploaded.';
            break;
        case '6':
            $error = 'Missing a temporary folder';
            break;
        case '7':
            $error = 'Failed to write file to disk';
            break;
        case '8':
            $error = 'File upload stopped by extension';
            break;
        case '999':
        default:
            $error = 'No error code avaiable';
    }
    $res["msg"] = $error;
    exit(json_encode($res));
}elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none'){
    $error = 'No file was uploaded..';
    $res["msg"] = $error;
    exit(json_encode($res));
}else{
    //验证上传文件大小是否超过4M
    if($_FILES[$fileElementName]['size']>(1024*1024*4)){
        $res["msg"] = "Exceed the limit size";
        exit(json_encode($res));
    }

    //获取文件后缀名
    $suffix=pathinfo($_FILES[$fileElementName]['name'],PATHINFO_EXTENSION);

    //上传文件
    $savename=date('YmdHis',time()).rand(1000,9999).'.'.$suffix;

    $filename = $_FILES[$fileElementName]['tmp_name'];

    switch (strtolower($suffix)){
        case "png":
            $source = imagecreatefrompng($filename);
            break;
        case "jpeg":
            $source = imagecreatefromjpeg($filename);
            break;
        case "jpg":
            $source = imagecreatefromjpeg($filename);
            break;
        default:
            $res['msg']='The suffix is not legal';
            exit(json_encode($res));
            break;
    }
    list($width, $height) = getimagesize($filename);
    $exif = exif_read_data($filename);
    if(!empty($exif['Orientation'])){
        switch ($exif['Orientation']){
            case 8:
                $tmp=$width;
                $width=$height;
                $height=$tmp;
                $source = imagerotate($source,90,0);
                break;
            case 3:
                $source = imagerotate($source,180,0);
                break;
            case 6:
                $tmp=$width;
                $width=$height;
                $height=$tmp;
                $source = imagerotate($source,-90,0);
                break;
        }
    }
    $newwidth = 720;
    $newheight = $newwidth*$height/$width;

    $image = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresized($image, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    imagejpeg ($image,"upload/".$savename);
    $res["msg"] = 'upload success';
    $res["filename"] = $savename;
    exit(json_encode($res));
}
?>