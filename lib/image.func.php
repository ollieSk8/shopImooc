<?php
	require_once "string.func.php";
	function verifyImage($width=100,$height=34,$type=3,$length=4,$session_name="verify"){
		$image=imagecreatetruecolor($width, $height);
		$white=imagecolorallocate($image,231,231,233);
		$blue=imagecolorallocate($image,0,0,0);
		imagefilledrectangle($image,0,0,$width,$height,$white);
		$chars=bulidRandomString($type,$length);
		$_SESSION[$session_name]=strtolower($chars);
		$fontfiles=array("msyhbd.ttf");
		for($i=0;$i<$length;$i++){
			$size=mt_rand(14,16);
			$angle=mt_rand(-15,15);
			$x=10+$i*$size;
			$y=mt_rand(20,26);
			$color=imagecolorallocate($image,mt_rand(50,90),mt_rand(80,200),mt_rand(90,180));
			$fontfile="../font/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
			$text=substr($chars,$i,1);
			imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
		}
		
		for($i=0;$i<50;$i++){
			$color=imagecolorallocate($image,mt_rand(50,90),mt_rand(80,200),mt_rand(90,180));
			imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),$color);
		}
		header("content-type:image/gif");
		ob_clean();
		imagegif($image);
		imagedestroy($image);
	};
	/**
	 * 生成缩略图
	 * @param string $filename
	 * @param string $destination
	 * @param int $dst_w
	 * @param int $dst_h
	 * @param bool $isReservedSource
	 * @param number $scale
	 * @return string
	 */
	function thumb($filename,$destination=null,$dst_w=null,$dst_h=null,$isReservedSource=true,$scale=0.5){
		list($src_w,$src_h,$imagetype)=getimagesize($filename);
		if(is_null($dst_w)||is_null($dst_h)){
			$dst_w=ceil($src_w*$scale);
			$dst_h=ceil($src_h*$scale);
		}
		$mime=image_type_to_mime_type($imagetype);
		$createFun=str_replace("/", "createfrom", $mime);
		$outFun=str_replace("/", null, $mime);
		$src_image=$createFun($filename);
		$dst_image=imagecreatetruecolor($dst_w, $dst_h);
		imagecopyresampled($dst_image, $src_image, 0,0,0,0, $dst_w, $dst_h, $src_w, $src_h);
		if($destination&&!file_exists(dirname($destination))){
			mkdir(dirname($destination),0777,true);
		}
		$dstFilename=$destination==null?getUniName().".".getExt($filename):$destination;
		$outFun($dst_image,$dstFilename);
		imagedestroy($src_image);
		imagedestroy($dst_image);
		if(!$isReservedSource){
			unlink($filename);
		}
		return $dstFilename;
	}
?>