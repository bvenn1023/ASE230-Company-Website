<?php

function printTeamMembers($name, $description) {
    echo '<h2>Team Member:</h2>';
    echo '<h4 class="mb-3 font-size-22">' . $name . '</h4>';
    echo '<p class="text-muted mb-0">Description: ' . $description . '</p>';
}

$jsonFile = '../../data/info.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $teamMembers = json_decode($jsonData, true);

} else {
    echo "JSON file not found.";
}
