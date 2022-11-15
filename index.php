<?php
include ('includes/header.php');
?>

<div class="content"> <!--content: the white box surrounding the content on the page. should be on every page-->
<div class="home-banner">
<h2>Welcome!</h2>
    <p>Welcome to NoteTote. Our site, founded in 2022, is a user-friendly music-based e-commerce site for artists and fans.
    Artists can upload albums of songs, set the album art and price, and see it update live in our browse page. Fans can browse
    our selections and checkout in the shopping cart, and see their purchases appear in their collection.</p>
</div>
    <div class="view-button"><a href="browse.php">Browse Albums</a></div>
<!--banner end-->
<div class="home-featured">
    <div class="featured-title">
        <h2>Featured Content</h2>
        <p>Top picks from our staff</p>
    </div>
    <div class="featured-albums-container">
        <div class="featured-album-wrapper">
            <div class="featured-album-lj"></div>
            <div class="featured-album-title"><p>The Longest Johns - Smoke and Oakum (2022)</p></div>
        </div>
        <div class="featured-album-wrapper">
            <div class="featured-album-crumb"></div>
            <div class="featured-album-title"><p>Crumb - Ice Melt (2021)</p></div>
        </div>
        <div class="featured-album-wrapper">
            <div class="featured-album-bmth"></div>
            <div class="featured-album-title"><p>Bring Me the Horizon - Sempiternal (2013)</p></div>
        </div>
    </div>
</div>
<!--featured end-->
<div class="reviews-container">
<h2>Reviews from Users</h2>
    <div class="review">
        <p class="review-text">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque ipsum sit amet nibh lacinia
            gravida ac vel turpis. Maecenas consequat lorem in felis molestie, cursus imperdiet mauris blandit. Duis ante
            magna, feugiat non gravida ut, vulputate aliquet massa. Vestibulum ante ipsum primis in faucibus."
        </p>
        <p class="review-username">-User777</p>
    </div>
    <div class="review">
        <p class="review-text">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque ipsum sit amet nibh lacinia
            gravida ac vel turpis. Maecenas consequat lorem in felis molestie, cursus imperdiet mauris blandit. Duis ante
            magna, feugiat non gravida ut, vulputate aliquet massa. Vestibulum ante ipsum primis in faucibus."
        </p>
        <p class="review-username">-123User</p>
    </div>
    <div class="review">
        <p class="review-text">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque ipsum sit amet nibh lacinia
            gravida ac vel turpis. Maecenas consequat lorem in felis molestie, cursus imperdiet mauris blandit. Duis ante
            magna, feugiat non gravida ut, vulputate aliquet massa. Vestibulum ante ipsum primis in faucibus."
        </p>
        <p class="review-username">-FirstName</p>
    </div>
</div>



</div> <!--"content" closing-->
<?php
include ('includes/footer.php');
?>