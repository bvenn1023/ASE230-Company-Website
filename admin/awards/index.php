
<?php require "awards.php";
?>
<table border="1">
<?php 
$fp=fopen('../../data/info.csv','r');
$content=fgetcsv($fp);

printcsv();
$rowcount=countCSVRows("../../data/info.csv");
echo $rowcount;
?>	
	


</table>

<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>





