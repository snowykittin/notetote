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
    <?php echo "<img src='", $row['albumIMG'] ,"'>" ?>
    <div class="album-info">
        <h2><?php echo $row['album_name'] ?> - $ <?php echo $row['price'] ?></h2>
        <p class="album-info-subtitle"><?php echo $row['artist'] ?></p>
        <p><?php echo $row['description'] ?> Test Description</p>
        <p class="album-info-subtitle"><?php echo $row['songs'] ?> Songs</p>
    </div>
</div>
<div class="album-buttons-container">
    <div class="album-button"><a href="album-edit.php">Edit</a></div>
    <div class="album-button"><a href="shoppingcart.php">Add to Cart</a></div>
    <div class="album-button"><a href="browse.php">Back to Browse</a></div>
</div>
</div>

<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();
include ('includes/footer.php');
?>