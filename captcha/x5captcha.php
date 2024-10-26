<?php
include("../res/x5engine.php");
$nameList = array("tl5","nsn","nxw","2g5","czm","8kn","wuw","2n3","75k","uzc");
$charList = array("C","Y","3","D","H","D","7","G","T","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
