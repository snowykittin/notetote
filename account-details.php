<?php
include ('includes/header.php');

//set email
$email = $_SESSION['login'];
$sql = "SELECT * FROM users WHERE email='$email'";

$query = @$conn -> query($sql);
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
    <h2 class="account-title">Account</h2>
    <div class="account-info-wrapper"> <!--this div holds all of the account information and puts a gap between them-->

<div class="account-info-row"><p class="account-info-title">First Name</p><p class="account-info"><?php echo $row['first_name'] ?></p></div>
<div class="account-info-row"><p class="account-info-title">Last Name</p><p class="account-info"><?php echo $row['last_name'] ?></p></div>
<div class="account-info-row"><p class="account-info-title">Email</p><p class="account-info"><?php echo $row['email'] ?></p></div>
    </div>

    <div class="album-buttons-container">
        <a href="account-edit.php?id=<?php echo $row['userID'] ?>"><button class="album-button">Edit</button></a>
        <a href="confirm-account-delete.php?id=<?php echo $row['userID'] ?>"><button class="album-button" style="background-color: #cc3333">Delete Account</button></a>
    </div>

</div>
<?php
include ('includes/footer.php');
?>
