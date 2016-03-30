<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./styles/admin.css">
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/login.js"></script>
</head>
<body>
<nav class="navbar navbar-default admin-nav">
	<p class="navbar-text">欢迎登陆</p>
</nav>
<div class="alert alert-danger" role="alert" style="display:none;text-align:center;"></div>
<div class="panel panel-default admin-section">
  <div class="panel-body" style="padding:15px;">
	<form class="form-horizontal" id="login-form">
	  <div class="form-group">
	    <label for="inputAdmin" class="col-sm-2 control-label">管理员账号</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputAdmin" placeholder="管理员账号" name="username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="inputPassword3" placeholder="" name="password">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="verificationCode" class="col-sm-2 control-label">验证码</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="verificationCode" placeholder="" name="verify">
	      <div class="verificationCode-img">
	     	<img src="getVerify.php" alt="">		
	     </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="checkbox">
	        <label>
	          <input type="checkbox" name="autoFlag" value="1">自动登录(7天之内有效)
	        </label>
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="button" class="btn btn-primary" id="login-btn">登录</button>
	    </div>
	  </div>
	</form>
  </div>
 </div>
</body>
</html>