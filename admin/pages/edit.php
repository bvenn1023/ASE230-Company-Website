

    <form method="POST">


        <label for="newContent">New File Contents:</label><br>
        <textarea id="newContent" name="newContent" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Create Item">
    </form>
	
	
<?php
require "pages.php";
if (isset($_GET["name"])) {

editText($_GET["name"]);

	


} else {
    echo '<p>Item not found.</p>';
}

?>