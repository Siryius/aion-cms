<?php

require_once("class/captcha.php");
$aFonts =	array("graphics/fonts/VeraBd.ttf", "graphics/fonts/VeraIt.ttf", "graphics/fonts/Vera.ttf");
$oVisualCaptcha	=	new PhpCaptcha($aFonts, 200, 60);	
$oVisualCaptcha -> Create();
?>