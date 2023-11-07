<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Item List</h1>

    <?php
    $jsonFile = '../../data/info.json';
    require('team.php');

    function displayItems($items)
    {
        echo '<table>';
        echo '<tr><th>Name</th><th>Description</th><th>Action</th></tr>';
        foreach ($items as $name => $item) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($name) . '</td>';
            echo '<td>' . htmlspecialchars($item['Description']) . '</td>';
            echo '<td><a href="detail.php?name=' . urlencode($name) . '">View</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    $items = getAll($jsonFile);

    if (!empty($items)) {
        displayItems($items);
    } else {
        echo '<p>No items available.</p>';
    }
    ?>

    <p><a href="create.php">Create New Item</a></p>
</body>

</html>