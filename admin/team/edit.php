<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
</head>

<body>
    <h1>Edit Item</h1>

    <?php
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        $jsonFile = '../../data/info.json';

        require('team.php');

        $jsonManager = new jsonManager();
        $items = $jsonManager->getAll($jsonFile);

        if (isset($items[$name])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $newName = $_POST["name"];
                $description = $_POST["description"];

                if (empty($newName) || empty($description)) {
                    echo '<p>Please fill in all fields.</p>';
                } else {
                    if ($newName !== $name) {
                        $items[$newName] = $items[$name];
                        unset($items[$name]);
                        $name = $newName;
                    }

                    $items[$name]['Description'] = $description;

                    $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);

                    if (file_put_contents($jsonFile, $updatedJsonContents) !== false) {
                        echo '<p>Changes saved successfully.</p>';
                    } else {
                        echo '<p>Failed to save changes.</p>';
                    }
                }
            }

            $description = $items[$name]['Description'];

            echo '<form method="POST">';
            echo '<label for="name">Item Name:</label>';
            echo '<input type="text" id="name" name="name" value="' . htmlspecialchars($name) . '" required><br><br>';

            echo '<label for="description">Description:</label><br>';
            echo '<textarea id="description" name="description" rows="4" cols="50" required>' . htmlspecialchars($description) . '</textarea><br><br>';

            echo '<input type="submit" value="Save Changes">';
            echo '</form>';
        } else {
            echo '<p>Item not found.</p>';
        }
    } else {
        echo '<p>No item selected for editing.</p>';
    }
    ?>

    <p><a href="index.php">Back to Item List</a></p>
</body>

</html>