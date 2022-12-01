<?php
include ('includes/header.php');

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
        <div class="album-info">
            <input class="input-border input-url" type="text" name="image" value="<?php echo $row['albumIMG']?>" required />
            <div class="album-info-titles">
            <input class="input-border input-title" type="text" name="title" value="<?php echo $row['album_name'] ?>" required />
            <input class="input-border input-title" type="number" name="price" step="0.01" value="<?php echo $row['price'] ?>" required />
            </div>

            <input class="input-border input-subtitle" type="text" name="artist" value="<?php echo $row['artist'] ?>" required />
            <textarea class="input-border input-description" type="text" name="description" required><?php echo $row['description'] ?></textarea>
            <input class="input-border input-subtitle" type="number" name="songs" value="<?php echo $row['songs'] ?>" required />
        </div>
    <div class="album-buttons-container">
        <a href="confirm-album-edit.php"><button class="album-button">Save</button></a>
        <a href="album-details.php?id=<?php echo $row['albumID'] ?>"><button class="album-button">Cancel</button></a>
        <a href="#"><button class="album-button">Delete</button></a>
    </div>
</div>

<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();
include ('includes/footer.php');
?>
