<?php
include ('includes/header.php');

//search php
if (filter_has_var(INPUT_GET, "terms")) {
    $terms_str = filter_input(INPUT_GET, 'terms', FILTER_SANITIZE_STRING);
} else {
    echo "There was not search terms found.";
    include ('includes/footer.php');
    exit;
}
//explode the search terms into an array
$terms = explode(" ", $terms_str);

//select statement using pattern search. Multiple terms are concatnated in the loop.
$sql = "SELECT * FROM albums WHERE 1";
foreach ($terms as $term) {
    $sql .= " AND artist LIKE '%$term%' OR album_name LIKE '%$term%'";
}

//execute the query
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

if ($query->num_rows == 0) {
    echo "<div class='content'><div class='home-banner'><h1>Search Results</h1><p>Your search <i>'$terms_str'</i> did not match any albums in our inventory</p></div>";
    echo "<div class='view-button'><a href='browse.php'>Back to Browse</a></div></div>";
    include ('includes/footer.php');
    exit;
}

?>

    <div class="content">
        <div class="home-banner">
            <h1>Search Results</h1>
            <p>Here are the albums that meet your search criteria.</p>
        </div>
        <div class="view-button"><a href="browse.php">Back to Browse</a></div>
        <!--banner end-->

        <div class="allAlbums">
            <?php
            //while loop that inserts one of each album
            while (($row = $query->fetch_assoc()) !== NULL){
                echo "<div class='album'>";
                echo "<a href=album-details.php?id=", $row['albumID'], "><img src='", $row['albumIMG'] ,"'>";
                echo "<h3>", $row['album_name'], " - ", $row['artist'],"</h3></a>";
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