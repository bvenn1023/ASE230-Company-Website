<?php

// Set the content type to CSV
header('Content-Type: text/csv; charset=utf-8');

// Set the response header to specify that the file should be downloaded as an attachment
header('Content-Disposition: attachment; filename=data.csv');

// Create an array of data
$data = [['Name', 'Email', 'Phone'], ['John Smith', 'john@example.com', '555-555-1212'], ['Jane Doe', 'jane@example.com', '555-555-1213']];

// Open a file handle for writing
$fp = fopen('php://output', 'w');

// Write the data to the file
foreach ($data as $row) {
  fputcsv($fp, $row);
}
// Close the file handle
fclose($fp);
