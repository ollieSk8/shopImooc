<?php
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
		imagegif($image);
		imagedestroy($image);
	};
?>