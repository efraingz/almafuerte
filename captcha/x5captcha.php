<?php
include("../res/x5engine.php");
$nameList = array("dlf","yhh","eee","7gs","v3p","3de","4dk","vy6","vzx","n36");
$charList = array("3","X","7","U","Z","L","Z","S","S","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
