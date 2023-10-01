<?php 
function displaycsv($csvFilePath) {
  
    if (file_exists($csvFilePath)) {
        // Open the CSV file for reading
        if (($fp = fopen($csvFilePath, "r")) !== false) {
    
            $headers = fgetcsv($fp);
            
            // Initialize an array to store the data for each column
            $columns = array_fill_keys($headers, []);

            // Read the rest of the rows
            while (($data = fgetcsv($fp)) !== false) {
                // run through each column and store the data
                foreach ($headers as $index => $columnName) {
                    $columns[$columnName][] = $data[$index];
                }
            }

            fclose($fp);

            // Display the columns
            foreach ($columns as $columnName => $columnData) {
                echo "<h3>$columnName</h3>";
                echo implode("<br>", $columnData);
                echo "<hr>";
            }
        } else {
            echo "Unable to open CSV file.";
        }
    } else {
        echo "CSV file does not exist.";
    }
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