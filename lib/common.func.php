<?php
	function echoJson($data=array(),$code=0,$info=""){
		header ("Content-type:application/json;charset=utf-8" );
		$res["data"] = $data;
        $res['code']=intval($code);
        $res['info']=$info;
		echo json_encode($res);
	};
?>