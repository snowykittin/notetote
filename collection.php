<?php
include ('includes/header.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['collection']) || !$_SESSION['collection']) {
    echo "<div class='content'><div class='home-banner'>
            <h1>My Collection</h1>
            <p>Here is the collection of all of the albums you have purchased from NoteTote! These albums are all digital-only copies. Click each album to view what you've collected!
            Are you interested in more albums? View our browse page for more options.</p></div><h1  class='cart-title'>Your collection is empty.</h1></div>";
    include ('includes/footer.php');
    exit();
}

//proceed since the collection is not empty
$collection = $_SESSION['collection'];
?>

<div class="content">
        <div class="home-banner">
            <h1>My Collection</h1>
            <p>Here is the collection of all of the albums you have purchased from NoteTote! These albums are all digital-only copies. Click each album to view what you've collected!
            Are you interested in more albums? View our browse page for more options.</p>
</div>
        <!--banner end-->
    <div class="allAlbums">
        <?php
        //select statement
        $sql = "SELECT albumID, album_name, artist, albumIMG FROM albums WHERE 0";

        foreach (array_keys($collection) as $id) {
            $sql .= " OR albumID=$id";
        }

        //execute the query
        $query = $conn -> query($sql);

        //while loop that inserts one of each album
        while (($row = $query->fetch_assoc())){
            echo "<div class='album'>";
            echo "<a href=album-details.php?id=", $row['albumID'], "><img src='", $row['albumIMG'] ,"'>";
            echo "<h3>", $row['artist'], " - ", $row['album_name'],"</h3></a>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<?php
//// clean up resultsets when we're done with them!
//$query->close();
//
//// close the connection.
//$conn->close();
include ('includes/footer.php');
?>