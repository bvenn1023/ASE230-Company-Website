
<?php require "awards.php";
?>
<table>
<?php 
$fp=fopen('../../lib/info.csv','r');
$content=fgetcsv($fp);
for($i=0;$i<count($content);$i++){
?>	
	<tr>
		<td>
		<?php 
		
		readcsv('../../lib/info.csv',$i);
		?>
		</td>
	</tr>
	
<?php }?>

</table>


<form method="POST" action='index.php'/>
<p>Enter line to delete</p>
<input type="text" name="delselection">
</form>

<?php 
if (isset($_POST["delselection"])){
	deletecsv("../../lib/info.csv",$_POST["delselection"]);
	print_r($_POST);
	//echo(readText('../../data/info.txt','1'));
	//header("Location: index.php");
	exit;
}
?>




