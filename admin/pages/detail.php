<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>

<?php require "pages.php";
	
	$lines=file($_GET["name"]);
	for($i=0;$i<count($lines);$i++){
		
	
		
		readText($_GET["name"],$i+1); 
		echo"<br>";
	
	
	}
?>

<p><a href="create.php?row=<?php echo $rowcount; ?>">New Item</a></p>
</body>
</html>
