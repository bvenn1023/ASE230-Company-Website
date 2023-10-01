
<?php require "awards.php";
?>
<table>
<?php 
$fp=fopen('../../lib/info.csv','r');
$content=fgetcsv($fp);
//for($i=0;$i<count($content);$i++){
?>	
	<tr>
		<td>
		View Data
		
		</td>
		<td>
		Delete Data
		</td>
		<td> 
		Edit Data
		</td>
	</tr>
	<tr>
		<td>
		<a href ="detail.php">View</a>
		</td>
		<td>
		<a href="delete.php">Delete </a>
		</td>
	
<?php// }?>

</table>






