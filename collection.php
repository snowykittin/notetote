<?php
include ('includes/header.php');
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
       while loop that inserts one of each album
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
include ('includes/footer.php');
?>