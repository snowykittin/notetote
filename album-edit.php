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
    <div class="album-details">
        <input type="text" name="image" value="<?php echo "<img src='", $row['albumIMG'] ,"'>" ?> size="40" required />
        <div class="album-info">
            <h2><input type="text" name="title" value="<?php echo $row['album_name'] ?>" size="40" required /> - <input type="number" name="price" step="0.01" value="<?php echo $row['price'] ?>" size="40" required /> </h2>
            <p><input type="text" name="artist" value="<?php echo $row['artist'] ?>" size="40" required /></p>
            <p><input type="text" name="description" value="<?php echo $row['description'] ?>" size="40" required /></p>
            <p><input type="number" name="songs" value="<?php echo $row['songs'] ?>" size="40" required /></p>
        </div>
    </div>
    <div class="album-buttons-container">
        <a href="album-details.php"><button class="album-button">Save</button></a>
        <a href="album-details.php"><button class="album-button">Cancel</button></a>
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
