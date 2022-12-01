<?php
include ('includes/header.php');

//retrieve album id from a query string
if (!filter_has_var(INPUT_GET, 'id')){
    echo "Error: album id was not found.";
    require_once('includes/footer.php');
    exit();
}
$albumID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//delete statement
$sql = "DELETE FROM albums WHERE albumID = '$albumID'";
//execute query
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
        <h1>Success!</h1>
        <p>Your album has been deleted.</p>
    </div>
    <div class="view-button">
        <a href="browse.php"><button>Back to Albums</button></a>
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
