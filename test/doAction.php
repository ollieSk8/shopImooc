<?php
	require_once "../lib/string.func.php";
	require_once "upload.func.php";
	header("conetnt-type:text/html;charset=utf-8");
	$info=uploadFile();
	var_dump($info);
?>