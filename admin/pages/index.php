<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>
<table border="1">
<?php require "pages.php";
	
	$lines=file('../../data/info.txt');
	for($i=0;$i<count($lines);$i++){
		
	
	echo '<tr>';
	readText("../../data/info.txt",$i); 
	echo '</tr>';
	
	}
?>
</table>
<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>
</body>
</html>
