<?php 
require"awards.php";
$csvManager=new csvmanager('../../data/info.csv');

  // Specify the absolute path to the CSV file
$csvFile = '../../lib/info.csv';
$line=$_GET["name"];
// Check if the CSV file exists
if (file_exists($csvManager->csvFile)) {
	// Read the CSV file into an array
    $csvData = array_map('str_getcsv', file($csvManager->csvFile));
	//print_r($csvData);
	echo ($csvData[$line][0]);
      

		
        
		
       
} else {
    echo "CSV file not found.";
}

?>
