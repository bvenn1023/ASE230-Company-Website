<?php

$jsonFile = '../../data/products.json';

function getAll($jsonFile)
{
    $jsonContents = file_get_contents($jsonFile);
    $items = json_decode($jsonContents, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON decoding error: " . json_last_error_msg());
        return [];
    }

    return $items;
}

function create($jsonFile, $name, $description, $price)
{
    $items = getAll($jsonFile);

    $newItem = [
        'Description' => $description,
        'Price' => $price,
    ];

    $items[$name] = $newItem;
    $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);
    return file_put_contents($jsonFile, $updatedJsonContents) !== false;
}


function editText($jsonFile, $name, $description)
{
    $items = getAll($jsonFile);

    if ($items !== null && isset($items[$name])) {
        $items[$name]['Description'] = $description;
        $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);

        if (file_put_contents($jsonFile, $updatedJsonContents) !== false) {
            return true;
        } else {
            error_log("Failed to write to JSON file: " . $jsonFile);
        }
    } else {
        error_log("Item not found: " . $name);
    }

    return false;
}

function deleteText($jsonFile, $name)
{
    $items = getAll($jsonFile);

    if ($items !== null && isset($items[$name])) {
        unset($items[$name]);
        $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);

        if (file_put_contents($jsonFile, $updatedJsonContents) !== false) {
            return true;
        } else {
            error_log("Failed to write to JSON file: " . $jsonFile);
        }
    } else {
        error_log("Item not found: " . $name);
    }

    return false;
}



?>