<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>添加商品</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/kindeditor/themes/default/default.css" />
  <link rel="stylesheet" href="../plugins/kindeditor/plugins/code/prettify.css" />
  <script charset="utf-8" src="../plugins/kindeditor/kindeditor-all.js"></script>
  <script charset="utf-8" src="../plugins/kindeditor/lang/zh-CN.js"></script>
  <script charset="utf-8" src="../plugins/kindeditor/plugins/code/prettify.js"></script>
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .error{
    color:#f00;
    margin-top:10px;
  }
</style>
<body>
<div class="alert alert-success" role="alert" style="display:none;">
  添加分类成功！
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  添加分类失败！请重试!
</div>
<div class="panel panel-default">
  <div class="panel-heading">添加商品</div>
  <div class="panel-body">
      <form name="productDeatil">
        <div class="form-group">
          <label>商品名称</label>
          <input type="text" class="form-control" placeholder="">
        </div>
         <div class="form-group">
          <label>商品分类</label>
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label>商品货号</label>
          <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>商品数量</label>
          <input type="text" class="form-control" placeholder="">
        </div>
         <div class="form-group">
          <label>商品市场价</label>
          <input type="text" class="form-control" placeholder="">
        </div>
         <div class="form-group">
          <label>商品商城价</label>
          <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>商品描述</label>
          <textarea class="form-control" rows="5" name="pDes" style="visibility:hidden;"></textarea>
        </div>
        <div class="form-group">
          <label>商品图片</label>
          <input type="file" value="添加附件"/>
        </div>
        <button type="submit" class="btn btn-primary">确认添加</button>
      </form>
      <script>
        KindEditor.ready(function(K) {
          var editor1 = K.create('textarea[name="pDes"]', {
            cssPath : '../plugins/kindeditor/plugins/code/prettify.css',
            uploadJson : '../plugins/kindeditor/php/upload_json.php',
            fileManagerJson : '../plugins/kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
              var self = this;
              K.ctrl(document, 13, function() {
                self.sync();
                K('form[name=productDeatil]')[0].submit();
              });
              K.ctrl(self.edit.doc, 13, function() {
                self.sync();
                K('form[name=productDeatil]')[0].submit();
              });
            }
          });
          prettyPrint();
        });
      </script>
  </div>
</div>
</body>
</html>