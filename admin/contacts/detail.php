
    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
    
        $contactDetails = []; 
        
        if (isset($contactDetails[$id])) {
            $contact = $contactDetails[$id];
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

