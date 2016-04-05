<?php
  require_once "../include.php";
  $id=$_REQUEST["id"];
  $sql="select id,cName from imooc_cate where id={$id}";
  $rows=fetch_one($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>编辑分类</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
  <script type="text/javascript" src="scripts/editCate.js"></script>
</head>
<style type="text/css">
  .error{
    color:#f00;
    margin-top:10px;
  }
</style>
<body>
<div class="alert alert-success" role="alert" style="display:none;">
  编辑分类成功！
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  编辑分类失败！请重试!
</div>
<div class="panel panel-default">
  <div class="panel-heading">编辑分类</div>
  <div class="panel-body">
      <form id="editCate-from" data-id="<?php echo $rows["id"]?>">
         <div class="form-group">
          <label for="cName">分类名称</label>
          <input type="text" class="form-control" id="cName" name="cName" placeholder="" value="<?php echo $rows["cName"]?>">
        </div>
        <button type="submit" class="btn btn-primary">确认修改</button>
      </form>
  </div>
</div>
</body>
</html>