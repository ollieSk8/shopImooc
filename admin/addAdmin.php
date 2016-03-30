<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>添加管理员</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
  <script type="text/javascript" src="scripts/addAdmin.js"></script>
</head>
<style type="text/css">
  .error{
    color:#f00;
    margin-top:10px;
  }
</style>
<body>
<div class="alert alert-success" role="alert" style="display:none;">
  增加管理员成功！
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  增加管理员失败！请重试!
</div>
<div class="panel panel-default">
  <div class="panel-heading">添加管理员</div>
  <div class="panel-body">
      <form id="addAdmin-from">
         <div class="form-group">
          <label for="adminUserName">管理员名称</label>
          <input type="text" class="form-control" id="adminUserName" name="adminUserName" placeholder="">
        </div>
        <div class="form-group">
          <label for="adminUserPass">管理员密码</label>
          <input type="password" class="form-control" id="adminUserPass" name="adminUserPass" placeholder="">
        </div>
        <div class="form-group">
          <label for="adminEmail">管理员邮箱</label>
          <input type="email" class="form-control" id="adminEmail" placeholder="" name="adminEmail">
        </div>
        <button type="submit" class="btn btn-primary">确认添加</button>
      </form>
  </div>
</div>
</body>
</html>