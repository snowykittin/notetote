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

<h1>Browse</h1>
<table class="browseList">
    <tr>
        <th>Album Name</th>
        <th>Artist</th>
        <th>Price</th>
        <th>Songs</th>
    </tr>
    <?php
    //create a while loop here to insert one row for each album.
    while (($row = $query->fetch_assoc()) !== NULL){
        echo "<tr>";
        echo "<td><a href=album-details.php?id=", $row['albumID'], ">", $row['album_name'],"</a></td>";
        echo "<td>", $row['artist'], "</td>";
        echo "<td>", $row['price'], "</td>";
        echo "<td>", $row['songs'], "</td>";
        echo "</tr>";
    }
    ?>

</table>

<?php
// clean up result sets when we're done with them!
$query->close();

// close the connection.
$conn->close();

include ('includes/footer.php');
?>