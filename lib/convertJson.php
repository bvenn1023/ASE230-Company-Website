<?php
// Function to print a team member and description
function printTeamMembers($name, $description) {
    echo '<h2>Team Member:</h2>';
    echo '<h4 class="mb-3 font-size-22">' . $name . '</h4>';
    echo '<p class="text-muted mb-0">Description: ' . $description . '</p>';
}

// Read the JSON file and decode it
$jsonFile = __DIR__.'/info.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

// Check if the 'Team' section exists in the JSON data
if (isset($data['Team'])) {
    $teamMembers = $data['Team'];

    // Loop through the team members and print each one
    foreach ($teamMembers as $name => $description) {
        printTeamMembers($name, $description);
    }
} else {
    echo "Team section not found in JSON data.";
}
