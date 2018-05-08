<?php
$photox=50;//照片left
$photoy=100;//照片top
$photow=500;//照片width

$huazix=10;//花字left
$huaziy=100;//花字top
$huaziw=50;//花字width

$image = imagecreatefromjpeg("images/makeElem/p6_bg.jpg");
$source = imagecreatefromjpeg($_POST['filename']);
imagecopyresized($image, $source, $photox, $photoy, 0, 0, $photow, 652*$photow/689, 689, 652);
$source = imagecreatefrompng("images/makeElem/img_wall_".$_POST['model'].".png");
imagecopyresized($image, $source, 0, 0, 0, 0, 720, 1410, 720, 1410);
$source = imagecreatefrompng("images/makeElem/huazi_".$_POST['huazi'].".png");
imagecopyresized($image, $source, $huazix, $huaziw, 0, 0, $huaziw, 166*$huaziw/265, 265, 166);
$savename=date('YmdHis',time()).rand(1000,9999).'.jpg';
imagejpeg ($image,"made/".$savename);

$res["msg"]="made success";
$res['filename']=$savename;
echo json_encode($res);