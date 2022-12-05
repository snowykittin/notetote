<?php
/*RIGHT NOW, THIS PAGE IS A COPY OF ALBUM-EDIT
EXCEPT IT HAS NO VALUES
Please let me know if there should be any actual changes!
-Alli
*/

include ('includes/header.php');


?>
<div class="content">
    <div class="home-banner">
        <h1>Add a New Album</h1>
    </div>

    <div class="album-details-edit">

        <form action="confirm-album-add.php" method="post">
        <div class="album-info">
            <label for="image">Album Image URL</label>
            <input class="input-border input-url" type="text" name="image" placeholder="Enter an image web URL..." required />
            <div class="album-info-titles">
                <div class="album-field-group">
                    <label for="title">Album Title</label>
                    <input class="input-border input-title" type="text" name="title" placeholder="Enter album name..." required />
                </div>
                <div class="album-field-group">
                    <label for="price">Album Price</label>
                    <input class="input-border input-title" type="number" name="price" step="0.01" placeholder="Enter a price..." required />
                </div>
            </div>
            <label for="artist">Artist Name</label>
            <input class="input-border input-subtitle" type="text" name="artist" placeholder="Enter artist's name..." required />
            <label for="description">Album Description</label>
            <textarea class="input-border input-description" type="text" name="description" required placeholder="Enter album description..."></textarea>
            <label for="songs">Number of Songs</label>
            <input class="input-border input-subtitle" type="number" name="songs" placeholder="Enter number of songs..." required />

        </div>
        <div class="album-buttons-container">
            <input type="submit" value="Add Album" class="album-button">
            <input type="button" value="Cancel" onclick="window.location.href = 'browse.php'">
        </div>
        </form>
    </div>
</div>

<?php
include ('includes/footer.php');
?>

