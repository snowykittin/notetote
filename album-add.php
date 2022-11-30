<?php
/*RIGHT NOW, THIS PAGE IS A COPY OF ALBUM-EDIT
EXCEPT IT HAS NO VALUES
Please let me know if there should be any actual changes!
-Alli
*/

include ('includes/header.php');


?>
<div class="content">
    <div class="album-details">
        <input type="text" name="image" size="40" required />
        <div class="album-info">
            <h2><input type="text" name="title"  required /> - <input type="number" name="price" step="0.01" required /> </h2>
            <p><input type="text" name="artist"  required /></p>
            <p><input type="text" name="description"  required /></p>
            <p><input type="number" name="songs"  required /></p>
        </div>
    </div>
    <div class="album-buttons-container">
        <a href="confirm-album-add.php"><button class="album-button">Save</button></a>
        <a href="browse.php"><button class="album-button">Cancel</button></a>
    </div>
</div>

<?php
include ('includes/footer.php');
?>

