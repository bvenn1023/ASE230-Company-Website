<?php 

class csvmanager{
	

	
	
	public static function printcsv($path)
	{
		// Specify the absolute path to the CSV file
		

		// Check if the CSV file exists
		if (file_exists($path)) {
			// Read the CSV file into an array
			$csvData = array_map('str_getcsv', file($path));
			//print_r($csvData);
			//echo $csvData[2][0];
			// Extract headers (first row)
			$headers = array_shift($csvData);
			
			// Search for the team member by name in the CSV data
			$count=0;
			foreach ($csvData as $row) {
			//print_r($row);
			$count+=1;
			
			echo "<tr>";
			echo '<td><a href="detail.php?name=' . urlencode($count) . '">' . $count . '</a></td>';
			echo "<td>".$row[0]."</td>";
			echo '<td><a href="edit.php?name=' . urlencode($count) . '">Edit</a> | <a href="delete.php?name=' . urlencode($count) . '">Delete</a></td>';
			echo "</tr>";
			
			
			}
			
		   
		} else {
			echo "CSV file not found.";
		}
	}
	public static function deletecsv($num,$path){
		
		$csvData = file($path);
		if ($num >= 0 && $num < count($csvData)) {
		// Remove the specified line
			unset($csvData[$num]);
			file_put_contents($path, implode('', $csvData));
		}
		
		
	}

	public static function countCSVRows($path) {
		if (file_exists($path)) {
			$rowCount = 0;
			
			if (($fp = fopen($path, "r")) !== false) {
				// Loop through the file and count the rows
				while (($data = fgetcsv($fp)) !== false) {
					$rowCount++;
				}
				
				fclose($fp);
			} else {
				// Unable to open the CSV file
				return false;
			}
			
			return $rowCount;
		} else {
			// CSV file does not exist
			return false;
		}
	}
	
	public static function printrow($path) {
		if (file_exists($path)) {
			// Read the CSV file into an array
			$csvData = array_map('str_getcsv', file($path));
			//print_r($csvData);
			$line = $_GET["name"];
			echo ($csvData[$line][0]);
		} else {
			echo "CSV file not found.";
		}
	}

	public static function createcsv(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$year = $_POST["year"];
			$description = $_POST["description"];
			$row=$_GET["row"];
			if (empty($year) || empty($description)) {
				echo '<p>Please fill in all fields.</p>';
			} else {
				$csvFile = '../../data/info.csv';
				$fp=fopen($csvFile,"a");
			
				$list=array(
				array($row,$year,$description),
				
				
				);
				//fwrite($fp,"\n");
				foreach ($list as $fields) {
					fputcsv($fp, $fields,";");
					}

				fclose($fp);

	  
				header("Location: index.php?name=" . urlencode($name));
				exit;
			}
		}
	}
}
    
?>