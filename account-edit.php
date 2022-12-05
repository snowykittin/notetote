<?php
include ('includes/header.php');

?>

<div class="content">
    <h2 class="account-title">Edit Account</h2>
    <div class="account-info-wrapper"> <!--this div holds all of the account information and puts a gap between them-->
<div class="account-info-row">
    <p class="account-info-title">User ID</p>
    <input class="account-info" value="<?php echo $row['userID']?>">
</div>
<div class="account-info-row">
    <p class="account-info-title">First Name</p>
    <input class="account-info" value="<?php echo $row['first_name']?>">
</div>
<div class="account-info-row">
    <p class="account-info-title">Last Name</p>
    <input class="account-info" value="<?php echo $row['last_name']?>">
</div>
<div class="account-info-row">
    <p class="account-info-title">Email</p>
    <input class="account-info" value="<?php echo $row['email']?>">
</div>
    </div>

    <div class="album-buttons-container">
        <a href="account-details.php?id=<?php echo $row['userID'] ?>"><button class="album-button">Save</button></a>
        <a href="account-details.php?id=<?php echo $row['userID'] ?>"><button class="album-button">Cancel</button></a>
        <a href="#"><button class="album-button" style="background-color: #cc3333">Delete Account</button></a>
    </div>

</div>
<?php
include ('includes/footer.php');
?>
