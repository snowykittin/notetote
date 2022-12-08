<?php
include ('includes/header.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['cart']) || !$_SESSION['cart']) {
    echo "<div class='content'><div class='home-banner'>
            <h1>My Shopping Cart</h1>
            <p>Uh oh! Your shopping cart is empty.</p></div>
            <div class='view-button'><a href='browse.php'><button>Browse Albums</button></a></div>
            </div>";
    include ('includes/footer.php');
    exit();
}

//proceed since the cart is not empty
$cart = $_SESSION['cart'];
?>

<!-- HTML HERE -->
<div class="content">
    <h1 class="cart-title">Shopping Cart</h1>
        <svg class="cart-image" xmlns="http://www.w3.org/2000/svg" width="68.801" height="61.391" viewBox="0 0 68.801 61.391">
            <path id="cart-shopping-solid" d="M2.878,0a2.878,2.878,0,0,0,0,5.755H9.125l7.23,37.95a2.889,2.889,0,0,0,2.83,2.338H58.513a2.878,2.878,0,0,0,0-5.755H21.571L20.48,34.532h38.01a3.838,3.838,0,0,0,3.693-2.794L68.657,8.717a3.843,3.843,0,0,0-3.693-4.88H14.628l-.288-1.5A2.889,2.889,0,0,0,11.511,0ZM21.1,61.391a5.755,5.755,0,1,0-5.755-5.755A5.757,5.757,0,0,0,21.1,61.391Zm40.288-5.755a5.755,5.755,0,1,0-5.755,5.755A5.757,5.757,0,0,0,61.391,55.636Z" fill="#46447e"/>
        </svg>


    <?php
    //insert code to display the shopping cart content

    //select statement
    $sql = "SELECT albumID, album_name, artist, albumIMG, price FROM albums WHERE 0";

    foreach (array_keys($cart) as $id) {
        $sql .= " OR albumID=$id";
    }

    //execute the query
    $query = $conn -> query($sql);

    //fetch albums and display them
    while ($row = $query -> fetch_assoc()) {
        $id = $row['albumID'];
        $title = $row['album_name'];
        $artist = $row['artist'];
        $albumIMG = $row['albumIMG'];
        $price = $row['price'];
        $qty = $cart[$id];
        $total = $qty * $price;
        echo "<div class='cart-item'>",
        "<img src='$albumIMG' alt='$title'>",
        "<div class='cart-info-row'>",
        "<h2 class='album-title'>$title</h2>",
        "<p class='artist-name'>$artist</p>",
        "<p class='price'>Price: $$price</p>",
        "</div>",
        "</div>",
        "<div class='cost'>",
        "<p>Quantity: $qty</p>",
        "<p>Total: $$total</p>",
        "</div>";

    }


    ?>
<!--    <div class="cart-item">-->
<!--        <img src="images/Crumb-Album.jpg" alt="Album Cover">-->
<!--        <div class="cart-info-row">-->
<!--            <h2 class="album-title">Album Title</h2>-->
<!--            <p class="artist-name">Artist Name</p>-->
<!--            <p class="price">Price $0.00</p>-->
<!--        </div>-->
<!--    </div>-->

    <div class="album-buttons-container">
        <a href="addtocollection.php"><button class="album-button">Checkout</button></a>
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

