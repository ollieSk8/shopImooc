<?php
	require_once '../include.php';
	$sql="select pName,albumPath,pDes,pSn,pNum,mPrice,iPrice,isShow,isHot from imooc_pro a,imooc_album c where a.id=c.id;";

	$rows=fetch_all($sql);
	//var_dump($rows);
	$rows=$rows[$_REQUEST["id"]-1];
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>商品详情</title>
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
	<style type="text/css">
	.table>tbody>tr>th{text-align: right;}
	.table>tbody>tr>td{
		vertical-align:middle;
	}
	</style>
</head>
<body>
<table class="table table-bordered table-striped">
	      <tbody>
	        <tr>
	          <th scope="row">
	            商品名称
	          </th>
	          <td><?php echo $rows["pName"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品图片
	          </th>
	          <td><img src="<?php echo "../image_220/{$rows["albumPath"]}";?>"/></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品描述
	          </th>
	          <td><?php echo $rows["pDes"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品货号
	          </th>
	          <td><?php echo $rows["pSn"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品数量
	          </th>
	          <td><?php echo $rows["pNum"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品市场价格
	          </th>
	          <td><?php echo $rows["mPrice"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            商品商城价格
	          </th>
	          <td><?php echo $rows["iPrice"];?></td>
	        </tr>
	        <tr>
	          <th scope="row">
	            是否上架
	          </th>
	          <td>
	          	<?php 
	          		if($rows["isShow"]){
	          			echo "已上架";
	          		}else{
	          			echo "未上架";
	          		}
	          	?>
	          </td>
	        </tr>
	        <tr>
	          <th scope="row">
	            是否热卖
	          </th>
	          <td>
	          	<?php 
	          		if($rows["isHot"]){
	          			echo "是";
	          		}else{
	          			echo "否";
	          		}
	          	?>
	          </td>
	        </tr>
      </tbody>
</table>
</body>
</html>