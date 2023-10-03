<?php require 'pages.php';


if (isset($_GET["name"])){
	deleteText('../../data/info.txt',$_GET["name"]);
	print_r($_GET["name"]);
	//echo(readText('../../data/info.txt','1'));
	header("Location: index.php");
	exit;
}
?>
