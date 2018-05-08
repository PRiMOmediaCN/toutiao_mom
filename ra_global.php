<?php
ob_start();
header("content-type:text/html; charset=utf-8");
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(1);
//require_once 'classes/ig2sql.class.php';
require_once 'classes/ig2GlobalTools.class.php';
require_once 'config.php';
//$db=new ig2sql();
//$db->ig2_conn("localhost","root","4w2y7i4z8g","select_room",'utf8');
//session_start();
function tellgoto($tell,$goto){
    if($tell){
        echo "<script language=javascript>alert('".$tell."');</script>";
        echo "<script language=javascript>document.location.href='".$goto."';</script>";
    }else{
        echo "<script language=javascript>document.location.href='".$goto."';</script>";
    }
    exit();
}
?>
