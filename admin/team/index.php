<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
</head>

<body>
    <h1>Item List</h1>

    <?php
    $jsonFile = '../../data/info2.json';

    if (file_exists($jsonFile)) {
        $jsonContents = file_get_contents($jsonFile);
        $items = json_decode($jsonContents, true);

        if ($items !== null) {
            echo '<table border="1">';
            echo '<tr><th>Name</th><th>Description</th><th>Actions</th></tr>';

            foreach ($items as $name => $item) {
                echo '<tr>';
                echo '<td><a href="detail.php?name=' . urlencode($name) . '">' . $name . '</a></td>';
                echo '<td>' . $item['Description'] . '</td>';
                echo '<td><a href="edit.php?name=' . urlencode($name) . '">Edit</a> | <a href="delete.php?name=' . urlencode($name) . '">Delete</a></td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>Invalid JSON data.</p>';
        }
    } else {
        echo '<p>JSON file not found.</p>';
    }
    ?>

    <p><a href="create.php">Create New Item</a></p>
</body>

</html>