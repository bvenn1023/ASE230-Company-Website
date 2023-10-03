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

        $jsonFile = '../../data/products.json';
        $jsonContents = file_get_contents($jsonFile);
        $items = json_decode($jsonContents, true);

        if (isset($items[$name])) {
            echo '<h2>' . htmlspecialchars($name) . '</h2>';
            echo '<p>Description: ' . htmlspecialchars($items[$name]["Description"]) . '</p>';

            $price = $items[$name]["Amount"];

            if (!empty($price)) {
                echo '<h3>Price</h3>';
                echo '<p>' . htmlspecialchars($price) . '</p>';
            } else {
                echo '<p>Price not available for this item.</p>';
            }

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