<?php
	$chaine= '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
	$image= imagecreatefrompng('Images/background.png');
	$color= imagecolorallocate($image, 0,255,0);
	$font = 'Fonts/strange.ttf';
	$Length= '28,29,30,31,32';
	
	function getCode($length, $chars)
		{
			$code = null;
				for ( $i=0; $i < $length; $i++ )
					{
						$code .=$chars
							{
								mt_rand( 0, strlen($chars) - 1 )
							};
					}
			return $code;
		};
	
	$code = getCode(5, $chaine);
	$length = 28 /*getLength()*/;
	
	$char1 = substr($code,0,1);
	$char2 = substr($code,1,1);
	$char3 = substr($code,2,1);
	$char4 = substr($code,3,1);
	$char5 = substr($code,4,1);
	
	imagettftext($image, $length, -10,0,37, $color, $font, $char1);
	imagettftext($image, $length, 20,37,37, $color, $font, $char2);
	imagettftext($image, $length, -35,55,37, $color, $font, $char3);
	imagettftext($image, $length, 25,100,37, $color, $font, $char4);
	imagettftext($image, $length, -15, 120,37, $color, $font, $char5);
	
	header('Content-Type:image/png');
	
	imagepng($image);
	
	imagedestroy($image);
	
?>