<?php

function readText($path,$lineNumber)
{
	$content = file_get_contents($path);
	
	if ($content !== false) {
		$lines = explode("\n", $content);
		$lineCount = count($lines);
		
		
		
		if ($lineNumber >= 1 && $lineNumber <= $lineCount) {
			$lineContent = $lines[$lineNumber - 1];
			//need a for loop that echos below table as well as content based on line number
			
			
            
            echo '<tr>';
            echo '<td><a href="detail.php?name=' . urlencode($lineNumber) . '">' . $lineNumber . '</a></td>';
            echo '<td>' . $lineContent . '</td>';
			
            echo '<td><a href="edit.php?name=' . urlencode($lineNumber) . '">Edit</a> | <a href="delete.php?name=' . urlencode($lineNumber) . '">Delete</a></td>';
            echo '</tr>';
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
?>



