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


?>