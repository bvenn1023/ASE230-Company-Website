<?php
require('contacts.php');
// loadPage('contacts', 'Contact us');
?>

<?php

echo "<table>";
foreach ($contacts as $contact) {
    $id = $contact['id'];
    $name = $contact['name'];
    $email = $contact['email'];

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td><a href='detail.php?id=$id'>Details</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
