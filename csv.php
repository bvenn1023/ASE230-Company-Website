<?php

// Set the content type to CSV
header('Content-Type: text/csv; charset=utf-8');

// Set the response header to specify that the file should be downloaded as an attachment
header('Content-Disposition: attachment; filename=data.csv');


$data = array(
'Awards' => array(
        'Company Name' => 'Orion Aerospace Dynamics',
        'Overview' => 'Orion Aerospace Dynamics, founded in 2021, is a game-changing aerospace company headquartered atop the serene peaks of Denver, Colorado. Championing the motto "The Sky is Not the Limit," Orion has been redefining space exploration and aviation with advanced propulsion systems, space habitats, and aerial vehicles that seem straight out of science fiction.',
        'Mission Statement' => 'To push the boundaries of human reach, making the vast expanse of space a familiar terrain and ensuring Earth\'s skies are traveled sustainably.',
    ),
    array(
        'Key Products & Services' => 'Galactic CruiserTM: An innovative spacecraft designed for deep space exploration, equipped with advanced life support systems and AI-driven navigation. Applications: Stellar Drive Propulsion, Holodeck Entertainment',
    ),
    array(
        'Key Products & Services' => 'SkySailor DronesTM: Environmentally-friendly drones powered by solar and wind energy, suitable for both recreational and professional use. Applications: Eco-Cam Tech, Infinite Flight Mode',
    ),
    array(
        'Key Products & Services' => 'Nebula StationsTM: Modular space habitats intended for research, tourism, and potential future colonization efforts. Applications: Bio-Dome Agriculture, Gravity Pods',
    ),
    array(
        'Key Products & Services' => 'AeroAcademyTM: An immersive training institution offering programs in aerospace engineering, astronaut training, and space tourism orientation. Applications: Virtual Spacewalks, Intergalactic Culture Modules',
    ),
    array(
        'Awards' => '2023: Secured "Aerospace Company of the Decade" title by Aviation Weekly. 2022: Successfully launched three Galactic CruiserTM missions to Mars, paving the way for potential human settlements. 2021: SkySailor DronesTM adopted by leading ecological researchers for environmental monitoring without carbon footprints. 2021: Partnership with NASA and SpaceX for the development of next-generation propulsion technologies.',
    ),
    array(
       'Team' => array( 'Capt. Helena Vance - Founder & CEO, Dr. Hiroshi Nakamura - CTO, Leo Rodriguez - Chief of Design, Ava O\'Connell - VP of Operations, Dr. Imani Okoro - Head of AeroAcademyTM',
    ),
);

// CSV file name
$filename = 'orion_aerospace.csv';

// Open a file for writing
$file = fopen($filename, 'w');

// Loop through the data and write each row as a CSV line
foreach ($data as $row) {
    fputcsv($file, $row, ',', '"');
}


fclose($file);

echo "CSV file '$filename' has been created.";

?>
