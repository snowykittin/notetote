<?php
include ('includes/header.php');
?>

    <!-- HTML HERE -->
    <div class="content">
        <div class="home-banner">
            <h1 class="about-us-title">About Us</h1>
            <p class="about-paragraph">At NoteTote, we want our users to know who helps bring this glorious platform to life! Read below about our great admin team, as well as any community contributors who may be putting in an extra bit of help to keep NoteTote flourishing!</p>
        </div>

        <div class="about-rows-wrapper">
            <div class="about-row">
                <div class="about-picture" style="background-image: url(images/AllisonforWebsite.jpg)"></div>
                <div class="about-info">
                    <h2 class="about-names">Allison Johnson</h2>
                    <p class="about-para">Allison is a beginner web designer who was tasked with designing and frontend developing for NoteTote. In addition to web, she has a background in music as well; under the alias “egguterra” she produces electronic/experimental tracks and has released 2 albums. Her favorite artists are Crumb, Boards of Canada, and Nanoray, whom she takes great inspiration from as well as choosing to listen to after a hard day’s work. </p>
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
                    <p class="about-para">Claire is a 3D specialist and enjoys character modeling and animation the most. She decided to take a stab at some web development with her two friends Summer and Allison to learn something new! Some of Claire’s favorite music is rock and metal and her favorite artists are Motionless in White, In this Moment, and The Amity Affliction. When she is not working on new 3D projects you can find her either curled up on the couch with her dogs crocheting or playing with her three ferrets!  </p>
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