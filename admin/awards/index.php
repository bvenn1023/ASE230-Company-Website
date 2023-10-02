
<?php require "awards.php";
?>
<table border="1">
<?php 
$fp=fopen('../../lib/info.csv','r');
$content=fgetcsv($fp);

printcsv();
$rowcount=countCSVRows("../../lib/info.csv");
echo $rowcount;
?>	
	


</table>

<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>





