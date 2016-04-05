<?php 
/**
 * 添加分类的操作
 * @return json
 */
function addCate(){
	$cName=$_POST["cName"];
	$arr=array( 
		"cName" => $cName
	);
	$queryId=insert("imooc_cate",$arr);
	if($queryId){
		echoJson($data=array(),$code=1,$info="添加成功！");
	}
}

/**
 * 根据ID得到指定分类信息
 * @param int $id
 * @return array
 */
function getCateById($id){
	$sql="select id,cName from imooc_cate where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改分类的操作
 * @param string $where
 * @return string
 */
function editCate($id){
	$cName=$_POST["cName"];
	$arr=array( 
		"cName" => $cName
	);
	$queryId=update("imooc_cate",$arr,"id={$id}");
	if($queryId){
		echoJson($data=array(),$code=1,$info="修改成功！");
	}
}

/**
 *删除分类
 * @param string $where
 * @return string
 */
function delCate($id){
	$queryId=delete("imooc_cate","id={$id}");
	if($queryId){
		echoJson($data=array(),$code=1,$info="删除成功！");
	}
}

/**
 * 得到所有分类
 * @return array
 */
function getAllCate(){
	$sql="select id,cName from imooc_cate";
	$rows=fetchAll($sql);
	return $rows;
}



