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

<div class="content">
    <div class="home-banner">
        <h1>Browse All</h1>
        <p>Search all of our albums, or browse NoteTote's expansive collection!</p>
        <!-- Search box to go here -->
        <form action="searchalbums.php" method="get">
            <input type="text" name="terms" id="search" required />&nbsp;&nbsp;
            <input type="submit" name="Submit" id="submit" value="Search" />
        </form>
    </div>
    <!--banner end-->
    <div class="view-button">
        <a href="album-add.php"><button>Add Album</button></a>
    </div>

    <div class="allAlbums">
        <?php
        //while loop that inserts one of each album
        while (($row = $query->fetch_assoc()) !== NULL){
            echo "<div class='album'>";
            echo "<a href=album-details.php?id=", $row['albumID'], "><img src='", $row['albumIMG'] ,"'>";
            echo "<h3>", $row['artist'], " - ", $row['album_name'],"</h3></a>";
            echo "</div>";
        }
        ?>
    </div>


</div>



<?php
// clean up result sets when we're done with them!
$query->close();

// close the connection.
$conn->close();

include ('includes/footer.php');
?>