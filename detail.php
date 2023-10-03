<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $contact = null;
    foreach ($contacts as $c) {
        if ($c['id'] == $id) {
            $contact = $c;
            break;
        }
    }

    if ($contact !== null) {
        echo "<p>Name: {$contact['name']}</p>";
        echo "<p>Email: {$contact['email']}</p>";
        echo "<p>Phone: {$contact['phone']}</p>";
    } else {
        echo "<p>Contact not found.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>