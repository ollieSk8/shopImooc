<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分页</title>
	<link rel="stylesheet" type="text/css" href="../admin/styles/bootstrap.min.css">
</head>
<body>
	<?php 
		require_once"../include.php";

		$step=3;
		$sql="select *from imooc_admin";
		$totalPage=ceil(getResultNum($sql)/$step);
		$url=$_SERVER["PHP_SELF"];
		//如果没传页数则默认是第一页，如果传了查看是否非法，做非法超出处理，都没有按传进来的数字处理
		if(@$_REQUEST["page"]){
			if($_REQUEST["page"]<1){
				$reqNum=1;
			}elseif($_REQUEST["page"]>$totalPage){
				$reqNum=$totalPage;
			}else{
				$reqNum=$_REQUEST["page"];
			}
			
		}else{
			$reqNum=1;
		}
		$page=($reqNum-1)*$step;
		// 1 3  6
		$sql="select *from imooc_admin limit {$page},{$step}";
		$rows=fetch_all($sql);

		foreach ($rows as $key => $value) {
			foreach ($value as $k => $v) {
				echo $k."--".$v."<br>";
			}
			echo "<hr>";
		}


		echo "<nav>";
	    echo     "<ul class=\"pagination\">";
	    if($reqNum==1){
	    	echo "<li class=\"disabled\"><a aria-label=\"Previous\"><span>&laquo;</span></a></li>";
	    }else{
	    	echo "<li><a href=\"".$url."?page=".($reqNum-1)."\" aria-label=\"Previous\"><span>&laquo;</span></a></li>";
	    }

	    for($i=0;$i<)
	          // <li class="disabled"><a href="http://www.baidu.com" aria-label="Previous"><span>&laquo;</span></a></li>
	          // <li class="active"><span>1</span></li>
	          // <li><a href="#">2</a></li>
	          // <li><a href="#">3</a></li>
	          // <li class="disabled"><a href="#" aria-label="Next"><span>&raquo;</span></a></li>
	    if($reqNum==$totalPage){
	    	echo "<li class=\"disabled\"><a aria-label=\"Next\"><span>&raquo;</span></a></li>";
	    }else{
	    	echo "<li><a href=\"".$url."?page=".($reqNum+1)."\" aria-label=\"Next\"><span>&raquo;</span></a></li>";
	    }
	    echo   "</ul>";
	    echo "</nav>";

	?>
	
</body>
</html>

