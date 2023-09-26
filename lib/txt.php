<?php 

function text($path){
	
	$textFile=$path;
	$fp=fopen($textFile,'r');
	$content=fread($fp,filesize($textFile));
	fclose($fp);
	echo $content;
}

?>