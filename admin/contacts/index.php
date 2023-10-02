<?php
require_once('contacts.php');
loadPage('contacts','Contact us');
?>
<?php
$contactRequests = []; // Assuming an array of contact requests

        
foreach ($contactRequests as $contact) {


    $id = $contact['id']; // Replace 'id' with your unique identifier

    $name = $contact['name'];
    $email = $contact['email'];
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td><a href='detail.php?id=$id'>Details</a></td>";
    echo "</tr>";
}
?>
    
