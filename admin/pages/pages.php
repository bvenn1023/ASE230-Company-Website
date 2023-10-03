<?php

function readText($path,$lineNumber)
{
	$content = file_get_contents($path);
	
	if ($content !== false) {
		$lines = explode("\n", $content);
		$lineCount = count($lines);
		
		
		
		if ($lineNumber >= 1 && $lineNumber <= $lineCount) {
			$lineContent = $lines[$lineNumber-1];
			//need a for loop that echos below table as well as content based on line number
			
			echo $lineContent;
            
            
		} 
			else {
				return "Line number out of range";
			}
	} 
		else {
			return "File not found or unable to read.";
		}
}

function deleteText($path, $lineNumber){
	$lines=file($path);
	if ($lineNumber<1||$lineNumber>count($lines)){
		echo('selection out of bounds');
		die();
	}
	unset($lines[$lineNumber-1]);
	file_put_contents($path,implode('',$lines));
	
	
	
	
	
	
	
}


function editText($path){
	if (isset($_POST['newContent'])) {
    $filename = $path;
    $newContent = $_POST['newContent'];

    // Check if the file exists
    if (file_exists($filename)) {
        // Open the file in write mode
        $file = fopen($filename, 'w');
        
        // Write the new content to the file
        if ($file) {
            fwrite($file, $newContent);
            fclose($file);
            echo "File '$filename' has been successfully updated.";
        } else {
            echo "Unable to open the file for writing.";
        }
    } else {
        echo "File '$filename' does not exist.";
    }
} else {
    echo "Please provide both a filename and new content.";
}
	
	
	
	
	
	
	
	
	
}
?>



