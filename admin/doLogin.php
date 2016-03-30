<?php
	require_once "../include.php";
	function doLogin(){
		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$verify=$_POST["verify"];
		$verificationCode=$_SESSION["verify"];
		$autoFlag=@$_POST["autoFlag"];
		if($verify==$verificationCode){
			$sql="select *from imooc_admin where username='{$username}' and password='{$password}'";
			$res=checkAdmin($sql);
			if($res){
				if($autoFlag){
					setcookie("adminId", $res["id"], time()+7*24*3600);
					setcookie("adminName", $res["username"], time()+7*24*3600);
				}
				$_SESSION["adminName"]=$res["username"];
				$_SESSION["adminId"]=$res["id"];
				echoJson($data=array(),$code=1,$info="登录成功");
			}else{
				echoJson($data=array(),$code=2,$info="用户名或密码错误");
			}
		}else{
			echoJson($data=array(),$code=0,$info="验证码错误");
		}
		
		
	}
	doLogin();
?>