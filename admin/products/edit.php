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

        $jsonFile = '../../data/products.json';

        require('products.php');

        $items = getAll($jsonFile);

        if (isset($items[$name])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $description = $_POST["description"];
                $amount = $_POST["amount"]; 

                if (empty($description) || empty($amount)) {
                    echo '<p>Please fill in all fields.</p>';
                } else {
                    $items[$name]['Description'] = $description;
                    $items[$name]['Amount'] = "$" . $amount; 

                    $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);

                    if (file_put_contents($jsonFile, $updatedJsonContents) !== false) {
                        echo '<p>Changes saved successfully.</p>';
                    } else {
                        echo '<p>Failed to save changes.</p>';
                    }
                }
            }

            $description = $items[$name]['Description'];
            $amount = isset($items[$name]['Amount']) ? substr($items[$name]['Amount'], 1) : ''; 

            echo '<form method="POST">';
            echo '<label for="name">Item Name:</label>';
            echo '<input type="text" id="name" name="name" value="' . htmlspecialchars($name) . '" readonly><br><br>';

            echo '<label for="description">Description:</label><br>';
            echo '<textarea id="description" name="description" rows="4" cols="50" required>' . htmlspecialchars($description) . '</textarea><br><br>';

            echo '<label for="amount">Price:</label>';
            echo '<input type="text" id="amount" name="amount" value="' . htmlspecialchars($amount) . '" required><br><br>';

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