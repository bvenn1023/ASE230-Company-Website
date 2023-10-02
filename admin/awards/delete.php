<?php 
require "awards.php";




?>




<?php 
if (isset($_GET["name"])){
	deletecsv("../../lib/info.csv",$_GET["name"]);
	
	print_r($_POST);
	//echo(readText('../../data/info.txt','1'));
	header("Location: index.php");
	exit;
}

?>