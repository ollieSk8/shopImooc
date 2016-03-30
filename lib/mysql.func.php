<?php
	//连接数据库
	function connet(){
		$link=mysql_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败Error".mysql_errno().":".mysql_error());
		mysql_set_charset(DB_CHARSET);  
		mysql_selectdb(DB_NAME) or die("指定打开数据库失败");
		return $link;
	};
	//增
	function insert($table,$array){
		$keys=join(",",array_keys($array));
		$vals="'".join("','",array_values($array))."'";
		$sql="insert {$table}($keys) values({$vals})";
		mysql_query($sql);
		return mysql_insert_id();
	};
	//记录更新
	function update($table,$array,$where=null){
		foreach($array as $key=>$val){
			if($str=null){
				$sep="";
			}else{
				$sep=",";
			}
			$str.=$sep.$key."='".$val."'";
		}
		$sql="update {$table} set {$str} ".($where==null?null:"where ".$where);
		mysql_query($sql);
		return mysql_affected_rows();
	};
	//记录删除
	function delete($table,$array,$where=null){
		$where=$where==null?null:"where ".$where;
		$sql="delete from {$table} {$where}";
		mysql_query($sql);
		return mysql_affected_rows();
	}
	//查找一条记录
	function fetch_one($sql,$result_type=MYSQL_ASSOC){
		$result=mysql_query($sql);
		if($result === FALSE) { 
		    die(mysql_error());
		}
		$row=mysql_fetch_array($result,$result_type);
		return $row;
	}
	//查找所有记录
	function fetch_all($sql,$result_type=MYSQL_ASSOC){
		$result=mysql_query($sql);
		if($result === FALSE) { 
		    die(mysql_error());
		}
		while(@$row=mysql_fetch_array($result,$result_type)){
			$rows[]=$row;
		};
		return $rows;
	}
	//得到结果集中的记录条数
	function getResultNum($sql){
		$result=mysql_query($sql);
		return mysql_num_rows($result);
	}
?>