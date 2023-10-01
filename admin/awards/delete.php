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