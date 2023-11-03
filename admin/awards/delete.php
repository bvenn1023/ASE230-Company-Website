<?php 
require "awards.php";
$csvManager=new csvmanager('../../data/info.csv');



?>




<?php 
if (isset($_GET["name"])){
	$csvManager->deletecsv($_GET["name"]);
	
	header("Location: index.php");
	exit;
}

?>