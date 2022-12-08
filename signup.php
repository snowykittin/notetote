<?php
include ('includes/header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- HTML HERE -->
<div class="content">
    <h1 class="account-title">Sign Up for an Account</h1>

    <div class="register-form">
        <form action="register.php" method="post">
            <label for="firstname">First Name:</label>
            <input name="firstname" type="text" required>
            <label for="lastname">Last Name:</label>
            <input name="lastname" type="text" required>
            <label for="email">Email Address:</label>
            <input name="email" type="email" required>
            <label for="password">Password:</label>
            <input name="password" type="password" required>

            <div class="album-buttons-container">
                <input type="submit" value="Make Account" class="album-button">
                <input type="button" value="Cancel" onclick="window.location.href = 'index.php'">
            </div>

        </form>

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

