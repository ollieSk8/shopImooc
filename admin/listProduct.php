<?php
	require_once '../include.php';
	$sql="select pName,cName,albumPath from imooc_pro a,imooc_cate b,imooc_album c where a.cId=b.id and a.id=c.id;";
	$rows=fetch_all($sql);
	

	//$arr=renderPagination("imooc_pro","select *from imooc_pro",3);
   	// var_dump($rows);
    //$html=$arr["pagination"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
	<style type="text/css">
	.table>tbody>tr>td{
		vertical-align:middle;
	}
	</style>
</head>
<body>
	<div class="panel panel-default">
  <div class="panel-heading">商品列表</div>
  <div class="panel-body">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>商品编号</th>
          <th>商品名称</th>
          <th>商品分类</th>
          <th>商品图片</th>
          <th>商品操作</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1;foreach ($rows as $rows):?>
          <tr>
           	 <td scope="row"><?php echo $i;?></td>
	          <td><?php echo $rows["pName"]?></td>
	          <td><?php echo $rows["cName"]?></td>
	          <td><img src="../image_50/<?php echo $rows["albumPath"]?>"></td>
	          <td>
	          	 <button type="button" class="btn btn-primary btn-sm">详情</button>
	          	 <button type="button" class="btn btn-primary btn-sm">修改</button>
	          	 <button type="button" class="btn btn-primary btn-sm">删除</button>
	          </td>
          </tr>
        <?php $i++;endforeach;?>
      </tbody>
    </table>
    <?php
      // echo $html;
    ?> 
  </div>
</div>
</body>
</html>