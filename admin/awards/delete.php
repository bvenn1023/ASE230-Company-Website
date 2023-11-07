<?php 
require "awards.php";
$csvManager=new csvmanager();

 
if (isset($_GET["name"])){
	$csvManager->deletecsv($_GET["name"],'../../data/info.csv');
	
	header("Location: index.php");
	exit;
}

?>