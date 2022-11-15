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
//display results in a table in the below HTML block
?>

<h1>Album Details</h1>

    <table class="albumDetails">
        <tr>
            <th>Album Name</th>
            <td><?php echo $row['album_name'] ?></td>
        </tr>
        <tr>
            <th>Artist</th>
            <td><?php echo $row['artist'] ?></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><?php echo $row['price'] ?></td>
        </tr>
        <tr>
            <th>Songs</th>
            <td><?php echo $row['songs'] ?></td>
        </tr>
    </table>

<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();
include ('includes/footer.php');
?>