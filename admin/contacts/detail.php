
    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
    
        $contactDetails = []; 
        
        if (isset($contactDetails[$id])) {
            $contact = $contactDetails[$id];
            echo "<p><strong>Name:</strong> {$contact['name']}</p>";
            echo "<p><strong>Email:</strong> {$contact['email']}</p>";

        } else {
            echo "<p>Contact not found.</p>";
        }
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>

