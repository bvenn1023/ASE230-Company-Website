<?php

function printJson($jsonFile, $sectionName) {
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);

    if (isset($data[$sectionName])) {
        $section = $data[$sectionName];
        echo '<h4 class="mb-3 font-size-22">' . $sectionName . '</h4>';
        
        echo '<p class="text-muted mb-0">Description: ' . $section['Description'] . '</p>';

        if (isset($section['Applications'])) {
            echo '<ul>';
            foreach ($section['Applications'] as $name => $appDescription) {
                echo '<li>' . $name . ': ' . $appDescription . '</li>';
            }
            echo '</ul>';
        }
    } else {
        echo "Section '$sectionName' not found in JSON data.";
    }
}

$jsonFile = __DIR__.'/info.json';


