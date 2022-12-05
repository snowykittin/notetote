<?php
include ('includes/header.php');

?>

<div class="content">
    <h2 class="account-title">Account</h2>
    <div class="account-info-wrapper"> <!--this div holds all of the account information and puts a gap between them-->
<div class="account-info-row"><p class="account-info-title">User ID</p><p class="account-info"><?php echo $row['userID'] ?></p></div>
<div class="account-info-row"><p class="account-info-title">First Name</p><p class="account-info"><?php echo $row['first_name'] ?></p></div>
<div class="account-info-row"><p class="account-info-title">Last Name</p><p class="account-info"><?php echo $row['last_name'] ?></p></div>
<div class="account-info-row"><p class="account-info-title">Email</p><p class="account-info"><?php echo $row['email'] ?></p></div>
    </div>

    <div class="album-buttons-container">
        <a href="account-edit.php?id=<?php echo $row['userID'] ?>"><button class="album-button">Edit</button></a>
    </div>

</div>
<?php
include ('includes/footer.php');
?>
