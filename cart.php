<?php
include ('includes/header.php');
?>

<!-- HTML HERE -->
<div class="content">
    <h1 class="cart-title">Shopping Cart</h1>
        <svg class="cart-image" xmlns="http://www.w3.org/2000/svg" width="68.801" height="61.391" viewBox="0 0 68.801 61.391">
            <path id="cart-shopping-solid" d="M2.878,0a2.878,2.878,0,0,0,0,5.755H9.125l7.23,37.95a2.889,2.889,0,0,0,2.83,2.338H58.513a2.878,2.878,0,0,0,0-5.755H21.571L20.48,34.532h38.01a3.838,3.838,0,0,0,3.693-2.794L68.657,8.717a3.843,3.843,0,0,0-3.693-4.88H14.628l-.288-1.5A2.889,2.889,0,0,0,11.511,0ZM21.1,61.391a5.755,5.755,0,1,0-5.755-5.755A5.757,5.757,0,0,0,21.1,61.391Zm40.288-5.755a5.755,5.755,0,1,0-5.755,5.755A5.757,5.757,0,0,0,61.391,55.636Z" fill="#46447e"/>
        </svg>
    <div class="cart-info-row"><h2 class="album-title">Album Title</h2><p class="artist-name">Artist Name</p><p class="price">Price $0.00</p></div>
    <div class="cart-info-row"><h3 class="album-title">Album Title</h3><p class="artist-name">Artist Name</p><p class="price">Price $0.00</p></div>
    <div class="cart-info-row"><h4 class="album-title">Album Title</h4><p class="artist-name">Artist Name</p><p class="price">Price $0.00</p></div>

</div>

<?php
//// clean up resultsets when we're done with them!
//$query->close();
//
//// close the connection.
//$conn->close();
include ('includes/footer.php');
?>

