<?php
  require_once "../include.php";
  checkLog();
  $rows=getAllCate();
  if(!$rows){
    echo "<script>alert('没有分类请先添加！');window.location='addCate.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>添加商品</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/kindeditor/themes/default/default.css" />
  <link rel="stylesheet" href="../plugins/kindeditor/plugins/code/prettify.css" />
  <link rel="stylesheet" href="styles/addProduct.css" />
  <script charset="utf-8" src="../plugins/kindeditor/kindeditor-all.js"></script>
  <script charset="utf-8" src="../plugins/kindeditor/lang/zh-CN.js"></script>
  <script charset="utf-8" src="../plugins/kindeditor/plugins/code/prettify.js"></script>
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
  <script type="text/javascript" src="scripts/addProduct.js"></script>
</head>
<style type="text/css">
  .error{
    color:#f00;
    margin-top:10px;
  }
</style>
<body>
<div class="alert alert-success" role="alert" style="display:none;">
  添加商品成功！
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  添加商品失败！
</div>
<div class="panel panel-default">
  <div class="panel-heading">添加商品</div>
  <div class="panel-body">
      <form name="addProduct"  action="doAdminAction.php?act=addPro" method="post" id="addProduct" enctype="multipart/form-data">
        <div class="form-group">
          <label>商品名称</label>
          <input type="text" class="form-control" placeholder="" name="pName">
        </div>
         <div class="form-group">
          <label>商品分类</label>
          <select class="form-control" name="cId">
           <?php foreach ($rows as $row):?>
              <option value="<?php echo $row["id"]?>"><?php echo $row["cName"]?></option>
           <?php endforeach;?>
          </select>
        </div>
        <div class="form-group">
          <label>商品货号</label>
          <input type="text" class="form-control" placeholder="" name="pSn">
        </div>
        <div class="form-group">
          <label>商品数量</label>
          <input type="text" class="form-control" placeholder="" name="pNum">
        </div>
         <div class="form-group">
          <label>商品市场价</label>
          <input type="text" class="form-control" placeholder="" name="mPrice">
        </div>
         <div class="form-group">
          <label>商品商城价</label>
          <input type="text" class="form-control" placeholder="" name="iPrice">
        </div>
        <div class="form-group">
          <label>商品描述</label>
          <textarea class="form-control" rows="5" name="pDes" id="editor_id" style="visibility:-hidden;"></textarea>
        </div>
        <div class="form-group">
          <label>商品图片</label><br>
          <button type="button" class="btn btn-info" id="selectFileBtn">上传图片</button>
          <div id="attachList"></div>
        </div>
        <button type="submit" class="btn btn-primary" style="clear:both;">确认添加</button>
      </form>
      <script>
        // KindEditor.ready(function(K) {
        //   var editor1 = K.create('textarea[name="pDes"]', {
        //     cssPath : '../plugins/kindeditor/plugins/code/prettify.css',
        //     uploadJson : '../plugins/kindeditor/php/upload_json.php',
        //     fileManagerJson : '../plugins/kindeditor/php/file_manager_json.php',
        //     allowFileManager : true,
        //     afterCreate : function() {
        //       var self = this;
        //       K.ctrl(document, 13, function() {
        //         self.sync();
        //         K('form[name=addProduct]')[0].submit();
        //       });
        //       K.ctrl(self.edit.doc, 13, function() {
        //         self.sync();
        //         K('form[name=addProduct]')[0].submit();
        //       });
        //     }
        //   });
        //   prettyPrint();
        // });
        //  KindEditor.ready(function(K) {
        //         window.editor = K.create('#editor_id');
        // });
      </script>
  </div>
</div>
</body>
</html>