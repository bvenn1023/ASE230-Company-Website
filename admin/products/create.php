<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Item</title>
</head>

<body>
    <h1>Create New Item</h1>

    <?php
    $jsonFile = '../../data/products.json';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $amount = $_POST["amount"]; 

        if (empty($name) || empty($description) || empty($amount)) {
            echo '<p>Please fill in all fields.</p>';
        } else {
            require('products.php');

            if (create($jsonFile, $name, $description, $amount)) {
                header("Location: edit.php?name=" . urlencode($name));
                exit;
            } else {
                echo '<p>Failed to create the item.</p>';
            }
        }
    }
    ?>

    <form method="POST">
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="amount">Price:</label>
        <input type="text" id="amount" name="amount" required><br><br>

        <input type="submit" value="Create Item">
    </form>

    <p><a href="index.php">Back to Item List</a></p>
</body>

</html>