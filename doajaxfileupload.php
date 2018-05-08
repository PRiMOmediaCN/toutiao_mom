<?php 
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
	}elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none'){
		$error = 'No file was uploaded..';
	}else{
		//验证上传文件大小是否超过4M
		if($_FILES[$fileElementName]['size']>(1024*1024*4)){
			$res["msg"] = "Exceed the limit size";
			exit(json_encode($res));
		}
		
		//获取文件后缀名
		$suffix=pathinfo($_FILES[$fileElementName]['name'],PATHINFO_EXTENSION);
		
		//验证文件后缀是否合法
		$allowSubFix=array('png','jpeg','jpg');
		if(!in_array(strtolower($suffix),$allowSubFix)){
			$res['msg']='The suffix is not legal';
			exit(json_encode($res));
		}
		
		//上传文件
		$logo=date('YmdHis',time()).rand(1000,9999).'.'.$suffix;
		if(move_uploaded_file($_FILES[$fileElementName]['tmp_name'],'logo/'.$logo)){
			$filename='logo/'.$logo;
			if($suffix=='jpg' || $suffix=='jpeg'){
				$ifo=@exif_read_data($filename,0,1) or die('no exif');
				$deg=0;
				if(array_key_exists('IFD0',$ifo)===true && array_key_exists('Orientation',$ifo['IFD0'])===true){
					switch($ifo['IFD0']['Orientation']){
						case 3:
							$deg=180;
							break;
						case 6:
							$deg=270;
							break;
						case 8:
							$deg=90;
							break;
					}
				}
				 
				rotata($filename,$deg);
			}
			$res["msg"] = 'upload success';
			$res["n"] = $logo;
			$imgTemp=getimagesize('logo/'.$logo);
			$res["w"] = $imgTemp[0];
			$res["h"] = $imgTemp[1];
		}else{
			$res["msg"] = "upload failed";
		}
		
		exit(json_encode($res));
	}
	
	function rotata($filename,$deg){
		$im = @imagecreatefromjpeg($filename);

		$rotate = imagerotate($im, $deg, 0);
		// 输出图像
		imagejpeg($rotate,$filename);
		
		// 释放内存
		imagedestroy($im);
		imagedestroy($rotate);
	}
?>