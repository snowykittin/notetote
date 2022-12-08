<?php
include ('includes/header.php');

//retrieve album id from a query string
if (!filter_has_var(INPUT_GET, 'id')){
    echo "Error: user id was not found.";
    require_once('includes/footer.php');
    exit();
}
$userID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM users WHERE userID=" . $userID;
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
?>

<div class="content">
    <h2 class="account-title">Edit Account</h2>
    <form action="confirm-account-edit.php" method="post">
    <div class="account-info-wrapper"> <!--this div holds all of the account information and puts a gap between them-->
        <input type="hidden" name="id" value="<?php echo $row['userID'] ?>">
<div class="account-info-row">
    <p class="account-info-title">First Name</p>
    <input class="account-info" name="first_name" value="<?php echo $row['first_name']?>">
</div>
<div class="account-info-row">
    <p class="account-info-title">Last Name</p>
    <input class="account-info" name="last_name" value="<?php echo $row['last_name']?>">
</div>
<div class="account-info-row">
    <p class="account-info-title">Email</p>
    <input class="account-info" name="email" value="<?php echo $row['email']?>">
</div>
        <div class="account-info-row">
            <p class="account-info-title">Password</p>
            <input class="account-info" type="password" name="password" value="<?php echo $row['password']?>">
        </div>
    </div>

    <div class="album-buttons-container">
        <input type="submit" value="Save" class="album-button">
        <a href="account-details.php?id=<?php echo $row['userID'] ?>"><button class="album-button">Cancel</button></a>
    </form>
    </div>
</div>
<?php
include ('includes/footer.php');
?>
