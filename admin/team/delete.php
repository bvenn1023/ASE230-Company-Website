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

        $jsonFile = '../../data/info2.json';
        $jsonContents = file_get_contents($jsonFile);
        $items = json_decode($jsonContents, true);

        if (isset($items[$name])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"])) {
                unset($items[$name]); 

                $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);
                file_put_contents($jsonFile, $updatedJsonContents);

                header("Location: index.php"); 
            }

            echo '<p>Are you sure you want to delete the item: ' . htmlspecialchars($name) . '?</p>';
            echo '<form method="POST">';
            echo '<input type="submit" name="confirm" value="Confirm Deletion">';
            echo '</form>';
        } else {
            echo '<p>Item not found.</p>';
        }
    } else {
        echo '<p>No item selected for deletion.</p>';
    }
    ?>

    <p><a href="index.php">Back to Item List</a></p>
</body>

</html>