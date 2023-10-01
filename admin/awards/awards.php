<?php 
function readcsv($path,$num) {

	$file = "../../lib/info.csv";
	$fp = fopen($path, "r");
	while ($content=fgetcsv($fp)) {
		
		
		
		echo ($content[$num]);
		echo'<br>';
	}

fclose($fp);
}
function deletecsv($path,$num){
	
	$csvData = file($path);
	if ($num >= 0 && $num < count($csvData)) {
	// Remove the specified line
		unset($csvData[$num]);
		file_put_contents($path, implode('', $csvData));
	}
	
	
}

//readcsv();
?>