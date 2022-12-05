<?php
include ('includes/header.php');

//grab form variables
$albumIMG =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING)));
$album_name =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)));
$price =  $conn->real_escape_string(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
$artist =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'artist', FILTER_SANITIZE_STRING)));
$description =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)));
$songs =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'songs', FILTER_SANITIZE_NUMBER_INT)));

//insert statement
$sql = "INSERT INTO albums VALUES (NULL, '$album_name', '$artist', '$price', '$songs', '$description', '$albumIMG')";

$query = @$conn -> query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $error = $conn->error;
    $error = "Insertion failed with: ($errno) $error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

?>

<div class="content">
    <div class="home-banner">
        <h1>Success!</h1>
        <p>Your album has been added.</p>
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
