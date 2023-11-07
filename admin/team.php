<?php

class jsonManager
{
    public static function getAll($jsonFile)
    {
        $jsonContents = file_get_contents($jsonFile);
        $items = json_decode($jsonContents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("JSON decoding error: " . json_last_error_msg());
            return [];
        }

        return $items;
    }

    public static function create($jsonFile, $name, $description)
    {
        $items = self::getAll($jsonFile);

        if ($items !== null) {
            $newItem = [
                'Description' => $description,
                'Applications' => [],
            ];

            $items[$name] = $newItem;
            $updatedJsonContents = json_encode($items, JSON_PRETTY_PRINT);

            if (file_put_contents($jsonFile, $updatedJsonContents) !== false) {
                return true;
            }
        }

        return false;
    }

    public static function editText($jsonFile, $name, $description)
    {
        $items = self::getAll($jsonFile);

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

    public static function deleteText($jsonFile, $name)
    {
        $items = self::getAll($jsonFile);

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
}
