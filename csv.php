
<?php
printcsv($data, $name, $key = null) {
    if (isset($data[$name])) {
        $section = $data[$name];
        echo '<h4 class="mb-3 font-size-22">' . $name . '</h4>';
        
        if ($key !== null && isset($section[$key])) {
            echo '<p>' . $section[$key] . '</p>';
        } elseif (is_array($section)) {
            if ($key !== null) {
                echo "Team member '$key' not found in '$name'.";
            } else {
                // Display the entire team
                echo '<ul>';
                foreach ($section as $name => $value) {
                    echo '<li>' . $name . ': ' . $value . '</li>';
                }
                echo '</ul>';
            }
        } else {
            echo '<p class="text-muted mb-0">Description: ' . $section . '</p>';
        }
    } else {
        echo "Section '$name' not found in data.";
    }
}

$data = array(
    'Awards' => array(
        '2023' => 'Secured "Aerospace Company of the Decade" title by Aviation Weekly.',
        '2022' => 'Successfully launched three Galactic Cruiser™ missions to Mars, paving the way for potential human settlements.',
        '2021' => 'SkySailor Drones™ adopted by leading ecological researchers for environmental monitoring without carbon footprints.',
        '2021' => 'Partnership with NASA and SpaceX for the development of next-generation propulsion technologies.'
    ),
    'Team' => array(
        'Capt. Helena Vance - Founder & CEO' => 'A former astronaut and a propulsion physicist, Capt. Vance brings unparalleled expertise and vision to Orion, leading the team towards uncharted territories.',
        'Dr. Hiroshi Nakamura - CTO' => 'A genius in aerospace engineering, Dr. Nakamura\'s innovations form the backbone of Orion\'s groundbreaking spacecraft and aerial vehicles.',
        'Leo Rodriguez - Chief of Design' => 'With a penchant for blending aesthetics with functionality, Leo ensures that every Orion product is not just effective but also a piece of art.',
        'Ava O\'Connell - VP of Operations' => 'Managing the intricate logistics of aerospace projects is Ava\'s forte. Her meticulous planning ensures that missions are executed flawlessly.',
        'Dr. Imani Okoro - Head of AeroAcademy™' => 'A space historian and a former NASA educator, Dr. Okoro shapes the curriculum, ensuring that the academy produces the best minds in aerospace.'
    )
);


