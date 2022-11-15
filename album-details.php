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

<h1>Album Details</h1>

<div class="albumDetails">
    <div class="albumInfoRow">
        <div class="albumImage">
            <?php echo "<img src='", $row['albumIMG'] ,"'>" ?>
        </div>
        <div class="albumText">
            <?php
                echo "<h1>", $row['album_name'],"</h1>" ;
                echo "<h2>", $row['artist'], "</h2>";
                echo "<p>Price: $", $row['price'], "</p";
            ?>
        </div>
    </div>

    <div class="albumSongs">
<!--        fill in songs-->
    </div>
</div>


<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();
include ('includes/footer.php');
?>