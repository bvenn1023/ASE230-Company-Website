<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
</head>

<body>
    <h1>Item Details</h1>

    <?php
    if (isset($_GET["name"])) {
        $name = $_GET["name"];

        require('team.php');
        $jsonFile = '../../data/info.json';
        $items = jsonManager::getAll($jsonFile);

        if (isset($items[$name])) {
            echo '<h2>' . htmlspecialchars($name) . '</h2>';
            echo '<p>Description: ' . htmlspecialchars($items[$name]["Description"]) . '</p>';

            echo '<h3>Applications</h3>';
            echo '<ul>';
            foreach ($items[$name]["Applications"] as $application => $description) {
                echo '<li>' . htmlspecialchars($application) . ': ' . htmlspecialchars($description) . '</li>';
            }
            echo '</ul>';

            echo '<form method="POST" action="delete.php?name=' . urlencode($name) . '">';
            echo '<input type="submit" name="delete" value="Delete">';
            echo '</form>';
            echo '<a href="edit.php?name=' . urlencode($name) . '">Edit</a>';
        } else {
            echo '<p>Item not found.</p>';
        }
    } else {
        echo '<p>No item selected for details.</p>';
    }
    ?>

    <p><a href="index.php">Back to Item List</a></p>
</body>

</html>