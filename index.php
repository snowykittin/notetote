<?php
include ('includes/header.php');
?>

<div class="content"> <!--content: the white box surrounding the content on the page. should be on every page-->
<div class="home-banner">
<h1>Welcome!</h1>
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
            "NoteTote has allowed me to store so many great songs across all of my devices! It's the perfect online tool for people like me who are constantly on the go! I recommend this to all of my family members, they know just how much I use it!"
        </p>
        <p class="review-username">-Jane Doe</p>
    </div>
    <div class="review">
        <p class="review-text">
            "It is a beautifully designed program that lets me seamlessly keep up to date on all of my favorite artists. There is an amazing, expansive collection of albums that is great for anybody who may want to store their music."
        </p>
        <p class="review-username">-Ran Chang</p>
    </div>
    <div class="review">
        <p class="review-text">
            "It's so cute! I love it so much. My friend Jane recommended this to me, and I think it's a really, really pretty. Being able to use a great program to look at all of my music that looks as good as the album covers is spectacular!"
        </p>
        <p class="review-username">-Alli Johnson</p>
    </div>
</div>



</div> <!--"content" closing-->
<?php
include ('includes/footer.php');
?>