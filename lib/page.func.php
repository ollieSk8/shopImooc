<?php 
		//@$url 当前文件路径
		//@$reqNum 当前传进来的页数
		//$totalPage 当前总页数
		function renderPagination($table,$step=3){
		    $sql="select *from {$table}";
		    $totalPage=ceil(getResultNum($sql)/$step);
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
		    $sql="select *from {$table} limit {$page},{$step}";
		    $rows=fetch_all($sql);
			$url=$_SERVER["PHP_SELF"];
			$html="";
			$html.= "<nav>";
		    $html.=     "<ul class=\"pagination\">";
		    if($reqNum==1){
		    	$html.=  "<li class=\"disabled\"><a aria-label=\"Previous\"><span>&laquo;</span></a></li>";
		    }else{
		    	$html.=  "<li><a href=\"".$url."?page=".($reqNum-1)."\" aria-label=\"Previous\"><span>&laquo;</span></a></li>";
		    }
		    for($i=0;$i<$totalPage;$i++){
		    	if($i+1==$reqNum){
		    		$html.=  " <li class=\"active\"><span>".$reqNum."</span></li>";
		    	}else{
		    		$html.=  "<li><a href=\"".$url."?page=".($i+1)."\">".($i+1)."</a></li>";
		    	}
		    }
		    if($reqNum==$totalPage){
		    	$html.=  "<li class=\"disabled\"><a aria-label=\"Next\"><span>&raquo;</span></a></li>";
		    }else{
		    	$html.=  "<li><a href=\"".$url."?page=".($reqNum+1)."\" aria-label=\"Next\"><span>&raquo;</span></a></li>";
		    }
		    $html.=    "</ul>";
		    $html.=  "</nav>";
		    if($totalPage<=1){
				$html="";
			}
		    return array(
		    	"rows"=>$rows,
		    	"pagination"=>$html
		    );
		}		
?>

