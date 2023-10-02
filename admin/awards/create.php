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
require "awards.php";
createcsv();
    ?>

    <form method="POST">
        <label for="year">Item Year:</label>
        <input type="text" id="year" name="year" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Create Item">
    </form>

    <p><a href="index.php">Back to Item List</a></p>
</body>
</html>