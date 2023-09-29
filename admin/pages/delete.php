<?php require 'pages.php';

?>


<table>
	<?php 
	$lines=file('../../data/info.txt');
	for($i=0;$i<count($lines);$i++){
	?>
	<tr>
		<td>
		<?php 
		echo ($i.'. ');
		readText('../../data/info.txt',$i);
		?>
		</td>
	</tr>
	<?php }?>




</table>


<form method="POST" action='delete.php'/>
<p>Enter line to delete</p>
<input type="text" name="delselection">
</form>

<?php 
if (isset($_POST["delselection"])){
	deleteText('../../data/info.txt',$_POST["delselection"]);
	print_r($_POST);
	//echo(readText('../../data/info.txt','1'));
	header("Location: index.php");
	exit;
}
?>
