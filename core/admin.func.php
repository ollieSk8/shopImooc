<?php
	require_once "../include.php";
	//检查是否有管理员
	function checkAdmin($sql){
		return fetch_one($sql);
	};
	//是否有管理员登录
	function checkLog(){
		if(@$_SESSION["adminId"]==""&&@$_COOKIE["adminId"]==""){
			echo "<script>location.href='login.php';</script>";
			
		}
	};
	//添加管理员addAdmin
	function addAdmin(){
		$adminUserName=$_POST["adminUserName"];
		$adminUserPass=md5($_POST["adminUserPass"]);
		$adminEmail=$_POST["adminEmail"];
		$arr=array(
			"username" => $adminUserName,
			"password"=> $adminUserPass,
			"email"=>$adminEmail
		);
		$queryId=insert("imooc_admin",$arr);
		if($queryId){
			echoJson($data=array(),$code=1,$info="添加成功！");
		}
	}
	//添加管理员
	function getAllAdmin(){
		$sql="select id,username,email from imooc_admin";
		$rows=fetch_all($sql);
		return $rows;
	}
	//管理员登出
	function logout(){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),"",time()-1);
		}
		if(isset($_COOKIE['adminId'])){
			setcookie("adminId","",time()-1);
		}
		if(isset($_COOKIE['adminName'])){
			setcookie("adminName","",time()-1);
		}
		session_destroy();
		header("location:login.php");
	};
?>