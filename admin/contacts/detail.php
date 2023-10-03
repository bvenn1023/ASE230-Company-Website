
    <?php

    if (isset($_GET['contacts'])) {
        $id = $_GET['contacts']; 
    
        $contactDetails = []; 
        
        if (isset($contactDetails[$contacts])) {
            $contact = $contactDetails[$contacts];
            echo "<p><strong>Name:</strong> {$contact['name']}</p>";
            echo "<p><strong>Email:</strong> {$contact['email']}</p>";
            echo "<p><strong>Phone:</strong> {$contact['phone']}</p>";

        } else {
            echo "<p>Contact not found.</p>";
        }
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>

