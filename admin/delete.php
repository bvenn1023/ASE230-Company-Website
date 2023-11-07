<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Item</title>
</head>

<body>
    <h1>Delete Item</h1>

    <?php

    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        $jsonFile = '../../data/info.json';

        require('team.php');

        $jsonManager = new jsonManager();

        if ($jsonManager->deleteText($jsonFile, $name)) {
            echo '<p>Item deleted successfully.</p>';
        } else {
            echo '<p>Failed to delete item.</p>';
        }
    } else {
        echo '<p>No item selected for deletion.</p>';
    }
    ?>

    <p><a href="index.php">Back to Item List</a></p>
</body>

</html>