<?php
    include ('includes/header.php');
?>

<!-- HTML HERE -->
<div class="content">
    <?php
    $message = "Please enter your username and password to login.";
        //check log in status of user
        $login_status = '';
        if (isset($_SESSION['login_status']))
            $login_status = $_SESSION['login_status'];

        //the user's last login attempt succeeded
        if ($login_status == 1) {
            echo "<div class=home-banner><h1 class='large'>Signed In</h1></div>";
            echo "<div class='status'><p>You are logged in as " . $_SESSION['name'] . ".</p>";
            echo "<div class='album-buttons-container'>",
            "<a href='account-details.php'><button>Account Details</button></a>",
            "<a href='logout.php'><button style='background-color: #cc3333'>Log out</button></a>",
            "</div>";
            echo "</div>";
            echo "</div>";
            include ('includes/footer.php');
            exit();
        }

        //the user's last login attempt failed
        if($login_status == 2) {
            $message = "Username or password invalid. Please try again.";
        }
    ?>
    <h1 class="account-title"><?php echo $message; ?></h1>

    <div class="register-form">
        <form action="confirm-login.php" method="post">
            <label for="email">Email Address:</label>
            <input name="email" type="email" required>
            <label for="password">Password:</label>
            <input name="password" type="password" required>

            <div class="album-buttons-container">
                <input type="submit" value="Log In" class="album-button">
                <input type="button" value="Cancel" onclick="window.location.href = 'index.php'">
            </div>
            <div class="options">
                <p>don't have an existing account? <a href="signup.php">sign up!</a></p>
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