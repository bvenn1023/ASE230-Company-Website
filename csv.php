<?php

function printcsv($name)
{
    $csvFile = __DIR__ . '/info.csv';

 
    if (file_exists($csvFile)) {
        
        $csvData = array_map('str_getcsv', file($csvFile));

        
        $headers = array_shift($csvData);

      
        foreach ($csvData as $row) {
            $rowData = array_combine($headers, $row);

            if ($rowData['Name'] === $name) {
                // Print the team member's description
                echo '<h2>Team Member:</h2>';
                echo '<h4 class="mb-3 font-size-22">' . $rowData['Name'] . '</h4>';
                echo '<p class="text-muted mb-0">Description: ' . $rowData['Description'] . '</p>';
                return; 
?>
