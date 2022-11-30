<?php
include ('includes/header.php');
?>

<div class="content">
    <div class="home-banner">
        <h1>Success!</h1>
        <p>Your album has been added.</p>
    </div>
    <div class="view-button">
        <a href="browse.php">View Album</a>
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
