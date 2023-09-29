<?php

function readText($path, $lineNumber)
{
	$content = file_get_contents($path);

	if ($content !== false) {
		$lines = explode("\n", $content);
		$lineCount = count($lines);

		if ($lineNumber >= 1 && $lineNumber <= $lineCount) {
			$lineContent = $lines[$lineNumber - 1];
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
?>


<table>
	<tr>
		<td> <?php readText('../../data/info.txt','1')?></td>
	</tr>
	<tr>
		<td><?php readText ('../../data/info.txt','2')?></td>
	</tr>




</table>
