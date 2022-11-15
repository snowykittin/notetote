<?php
    include ('includes/header.php');

    //grab album data
    $sql = "SELECT * FROM albums";
    $query = $conn -> query($sql);

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

<div class="browseBanner">
    <h1>Browse</h1>
    <h4>Search all of our albums, or browse NoteTote's expansive collection!</h4>
<!--    search box here-->
</div>

<div class="allAlbums">
    <?php
    //while loop that inserts one of each album
    while (($row = $query->fetch_assoc()) !== NULL){
        echo "<div class='album'>";
        echo "<img src='", $row['albumIMG'] ,"'>";
        echo "<h3><a href=album-details.php?id=", $row['albumID'], ">", $row['album_name'], " - ", $row['artist'],"</a></h3>";
        echo "</div>";
    }
    ?>

</div>

<?php
// clean up result sets when we're done with them!
$query->close();

// close the connection.
$conn->close();

include ('includes/footer.php');
?>