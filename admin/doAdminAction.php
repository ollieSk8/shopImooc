<?php 
require_once '../include.php';
checkLog();
$act=$_REQUEST['act'];

if($act=="logout"){
	logout();
}elseif($act=="addAdmin"){

	$mes=addAdmin();
}elseif($act=="editAdmin"){
	$id=$_REQUEST['id'];
	$mes=editAdmin($id);
}elseif($act=="delAdmin"){
	$id=$_REQUEST['id'];
	$mes=delAdmin($id);
}elseif($act=="addCate"){
	$mes=addCate();
}elseif($act=="editCate"){
	$id=$_REQUEST['id'];
	$mes=editCate($id);
}elseif($act=="delCate"){
	$id=$_REQUEST['id'];
	$mes=delCate($id);
}elseif($act=="addPro"){
	$mes=addPro();
	echo $mes;
}elseif($act=="editPro"){
	$mes=editPro($id);
}elseif($act=="delPro"){
	$mes=delPro($id);
}elseif($act=="addUser"){
	$mes=addUser();
}elseif($act=="delUser"){
		$mes=delUser($id);
}elseif($act=="editUser"){
	$mes=editUser($id);	
}elseif($act=="waterText"){
	$mes=doWaterText($id);
}elseif($act=="waterPic"){
	$mes=doWaterPic($id);
}
