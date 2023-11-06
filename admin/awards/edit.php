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
require "awards.php";
$csvManager=new csvmanager('../../data/info.csv');

if (isset($_GET["name"])) {
$name = $_GET["name"];

$csvManager->deletecsv($name);
$csvManager->createcsv();
	


} else {
    echo '<p>Item not found.</p>';
}

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
