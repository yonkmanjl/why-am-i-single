<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="0;url=added.html"> 
<?php
echo "Processing...";
$file = './add.js';
// Open the file to get existing content
$current = file_get_contents($file);
$currentList = substr($current, 0, -92);
$currentList .= ",";
// Append a new person to the file
	       $text = trim($_POST['reasons']);
	       $textAr = explode("\n", $text);
	       $textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind
	       
	       foreach ($textAr as $line) {
	           $line = trim($line);
	           $currentList .= "\"" . $line . "\", ";
	       }
	       
	       $currentList = rtrim($currentList, ", ");
	       $currentList .= "];" . "\n";
           $currentList .= "var num = Math.floor((Math.random() * reasons.length));" . "\n";
           $currentList .= '$("#reason").html(reasons[num]);}';
// Write the contents back to the file
file_put_contents($file, $currentList);
?>
</html>