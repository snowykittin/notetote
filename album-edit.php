<?php
include ('includes/header.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

//retrieve album id from a query string
if (!filter_has_var(INPUT_GET, 'id')){
    echo "Error: album id was not found.";
    require_once('includes/footer.php');
    exit();
}
$albumID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM albums WHERE albumID=" . $albumID;
//execute query
$query = $conn -> query($sql);
//retrieve results
$row = $query->fetch_assoc();

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    //include the footer
    require_once ('includes/footer.php');
    exit;
}

?>
<div class="content">
    <div class="album-details-edit">
        <form action="confirm-album-edit.php" method="post">
        <div class="album-info">
            <input type="hidden" name="id" value="<?php echo $row['albumID']?>">
            <label for="image">Album Image URL</label>
            <input class="input-border input-url" type="text" name="image" value="<?php echo $row['albumIMG']?>" required />
            <div class="album-info-titles">
                <div class="album-field-group">
                    <label for="title">Album Title</label>
                    <input class="input-border input-title" type="text" name="title" value="<?php echo $row['album_name'] ?>" required />
                </div>
                <div class="album-field-group">
                    <label for="price">Album Price</label>
                    <input class="input-border input-title" type="number" name="price" step="0.01" value="<?php echo $row['price'] ?>" required />
                </div>
            </div>
                <label for="artist">Artist Name</label>
            <input class="input-border input-subtitle" type="text" name="artist" value="<?php echo $row['artist'] ?>" required />
                <label for="description">Album Description</label>
            <textarea class="input-border input-description" type="text" name="description" required><?php echo $row['description'] ?></textarea>
                <label for="songs">Number of Songs</label>
            <input class="input-border input-subtitle" type="number" name="songs" value="<?php echo $row['songs'] ?>" required />
        </div>
    <div class="album-buttons-container">
        <input type="submit" value="Save" class="album-button">
        <input type="button" value="Cancel" onclick="window.location.href = 'album-details.php?id=<?php echo $row['albumID'] ?>'">
        </form>
    </div>
    </div>
</div>

<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();
include ('includes/footer.php');
?>
