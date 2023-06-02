<?php
	header("Content-Type: image/png");

	$image = imagecreate(110, 40);

	imagecolorallocate($image, 230, 230, 230);

	$color = imagecolorallocate($image, 20, 20, 20);

	$font = "../fonts/GillSans/GillSans-Bold-02.ttf";

	$text = bin2hex(random_bytes(5));

	session_start();

	$_SESSION["captcha"] = $text;

	imagettftext($image, 10, 0, 10, 25, $color, $font, $text);

	imagepng($image);
?>