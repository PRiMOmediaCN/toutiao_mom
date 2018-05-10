<?php include_once "get_access_token.php";

if(isset($_POST['filename'])){
    $filename=$_POST['filename'];
    $suffix=pathinfo($filename,PATHINFO_EXTENSION);
    $newwidth = 689;
    $newheight = 652;
    $image = imagecreatetruecolor($newwidth, $newheight);
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
    $imagew=$_POST['imagew'];
    $imagel=$_POST['imagel'];
    $imaget=$_POST['imaget'];
    $mbw=$_POST['mbw'];
    $imagew=$imagew*720/$mbw;
    $imagel=$imagel*720/$mbw;
    $imaget=$imaget*720/$mbw;
    $swidth=689;
    $sheight=652;
    $sx=16-$imagel;
    $sy=210-$imaget;
    $swidth=$swidth*720/$imagew;
    $sheight=$sheight*720/$imagew;
    $sx=$sx*720/$imagew;
    $sy=$sy*720/$imagew;
    imagecopyresized($image, $source, 0, 0, $sx, $sy, $newwidth, $newheight, $swidth, $sheight);
    $savename=date('YmdHis',time()).rand(1000,9999).'.'.$suffix;
    imagejpeg ($image,"cuted/".$savename,100);

    $img = "cuted/".$savename;
    $base64_img = ig2tools::base64EncodeImage($img,false);

    $url="https://aip.baidubce.com/rest/2.0/face/v3/detect?access_token=".$access_token;
    $data=array(
        'image' => $base64_img,
        'image_type' => "BASE64",
        'face_field' => "age,gender",//landmark
        'max_face_num' => 2,
        'face_type' => "LIVE"
    );
    $result=ig2tools::baidu_request_post($url,$data);
    $result=json_decode($result,true);
    $result=$result['result'];
    if($result['face_num']<2){
        $res["msg"] = 'only1face';
        exit(json_encode($res));
    }else{
        $image = imagecreatefromjpeg("cuted/".$savename);

        $face1=$result['face_list'][0];
        $face1age=$face1['age'];
        $face1popfile="images/age_left_bg.png";
        $face1popx=$face1['location']['left']-82*1.5-40;
        $face1popy=$face1['location']['top']+$face1['location']['height']/2;
        $face1agex=$face1popx+25;
        $face1agey=$face1popy+80;
        if($face1age<10){
            $face1agex+=15;
        }
        if($face1age>99){
            $face1agex-=15;
        }

        $face2=$result['face_list'][1];
        $face2age=$face2['age'];
        $face2popfile="images/age_left_bg.png";
        $face2popx=$face2['location']['left']-82*1.5-40;
        $face2popy=$face2['location']['top']+$face2['location']['height']/2;
        $face2agex=$face2popx+25;
        $face2agey=$face2popy+80;
        if($face2age<10){
            $face2agex+=15;
        }
        if($face2age>99){
            $face2agex-=15;
        }

        if($face1popx<$face2popx){
            $face2popx=$face2['location']['left']+$face2['location']['width']+40;
            $face2popy=$face2['location']['top']-78*1.5;
            $face2popfile="images/age_right_bg.png";
            $face2agex=$face2popx+40;
            $face2agey=$face2popy+70;
            if($face2age<10){
                $face2agex+=15;
            }
            if($face2age>99){
                $face2agex-=15;
            }
        }
        if($face1popx>=$face2popx){
            $face1popx=$face1['location']['left']+$face1['location']['width']+40;
            $face1popy=$face1['location']['top']-78*1.5;
            $face1popfile="images/age_right_bg.png";
            $face1agex=$face1popx+40;
            $face1agey=$face1popy+70;
            if($face1age<10){
                $face1agex+=15;
            }
            if($face1age>99){
                $face1agex-=15;
            }
        }
        $image = imagecreatefromjpeg("cuted/".$savename);

        $black = imagecolorallocate($image, 0, 0, 0);
        $font = 'images/msyh.ttc';

        $source = imagecreatefrompng($face1popfile);
        imagecopyresized($image, $source, $face1popx, $face1popy, 0, 0, 82*1.5, 78*1.5, 82, 78);
        $source = imagecreatefrompng($face2popfile);
        imagecopyresized($image, $source, $face2popx, $face2popy, 0, 0, 82*1.5, 78*1.5, 82, 78);
        imagettftext($image, 35, 0, $face1agex, $face1agey, $black, $font, $face1age);
        imagettftext($image, 35, 0, $face2agex, $face2agey, $black, $font, $face2age);
        imagejpeg ($image,"cuted/".$savename,100);
        $res["msg"] = 'cut success';
        $res["filename"] = $savename;
        $res["info"] = $result;
    }


    echo json_encode($res);
}