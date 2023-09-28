<?php
// Function to print a team member's description by name
function printcsv($name)
{
    // Specify the absolute path to the CSV file
    $csvFile = __DIR__ . '/info.csv';

    // Check if the CSV file exists
    if (file_exists($csvFile)) {
        // Read the CSV file into an array
        $csvData = array_map('str_getcsv', file($csvFile));

        // Extract headers (first row)
        $headers = array_shift($csvData);

        // Search for the team member by name in the CSV data
        foreach ($csvData as $row) {
            $rowData = array_combine($headers, $row);

            if ($rowData['Name'] === $name) {
                // Print the team member's description
                echo '<h2>Team Member:</h2>';
                echo '<h4 class="mb-3 font-size-22">' . $rowData['Name'] . '</h4>';
                echo '<p class="text-muted mb-0">Description: ' . $rowData['Description'] . '</p>';
                return; // Exit the function once found
            }
        }

        // If the name wasn't found
        echo "Team member '$name' not found in data.";
    } else {
        echo "CSV file not found.";
    }
}





