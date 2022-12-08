<?php
include ('includes/header.php');
?>

    <!-- HTML HERE -->
    <div class="content">
        <div class="home-banner">
            <h1 class="about-us-title">About Us</h1>
            <p class="about-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="about-rows-wrapper">
            <div class="about-row">
                <div class="about-picture" style="background-image: url(images/AllisonforWebsite.jpg)"></div>
                <div class="about-info">
                    <h2 class="about-names">Allison Johnson</h2>
                    <p class="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec hendrerit rutrum eleifend.
                        Sed nisi massa, laoreet sit amet orci a, molestie porta neque.
                        In ut sagittis orci. Donec mi lectus, sollicitudin non ipsum ac, fringilla. </p>
                </div>
            </div>

            <div class="about-row">
                <div class="about-picture" style="background-image: url(images/SummerforWebsite.jpg)"></div>
                <div class="about-info">
                    <h4 class="about-names">Summer Sexton</h4>
                    <p class="about-para">As one of the three web masters for NoteTote, Summer is most often behind-the-scenes tinkering on the next greatest feature. Her favorite music spans a variety of pop to theatre musicals, even into the realm of classical. She has played violin for over seven years, and has also been singing for even longer. Some of her favorite artists include Poor Mans Poison, The Longest Johns, and Sabaton. In terms of violinists, she adores Hilary Hahn. She also has a dog named Jinn, and a cat named Willow, who are often her buddies when it comes to listening to music.</p>
                </div>
            </div>

            <div class="about-row">
                <div class="about-picture" style="background-image: url(images/ClaireforWebsite.jpg)"></div>
                <div class="about-info">
                    <h4 class="about-names">Claire McAllister</h4>
                    <p class="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec hendrerit rutrum eleifend.
                        Sed nisi massa, laoreet sit amet orci a, molestie porta neque.
                        In ut sagittis orci. Donec mi lectus, sollicitudin non ipsum ac, fringilla. </p>
                </div>
            </div>
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