<?php
  require_once "../include.php";
  $rows=getAllAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>管理员列表</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
  <script type="text/javascript" src="scripts/editAdmin.js"></script>
</head>
<style type="text/css">
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
  vertical-align: middle; 
}
</style>
<body>
<div class="panel panel-default">
  <div class="panel-heading">管理员列表</div>
  <div class="panel-body">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>编号</th>
          <th>管理员名称</th>
          <th>管理员邮箱</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $rows):?>
          <tr>
            <th scope="row"><?php echo $rows["id"]?></th>
            <td><?php echo $rows["username"]?></td>
            <td><?php echo $rows["email"]?></td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" onclick="editAdmin(<?php echo $rows["id"]?>)">修改</button>
              <button type="button" class="btn btn-primary btn-sm">删除</button>
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>