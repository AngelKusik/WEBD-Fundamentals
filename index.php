<?php
$file = "index.php";
$date = "February 24, 2022";
$title = "Student's Profile";
$description = "index.php is the home page of this website and contains some information
about me as well as the purpose of this website.";
$banner = "Welcome!";

include ("./header.php");
?>

      <!-- About this Webite Section-->
    <h2>Angelica Kusik</h2>
    <p class="italic">Student of Computer Programming.</p>
    <p>Working to become a programmer. Superhero enthusiast. I &#9829; wine, gardening, and the Foo Fighters.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <!-- Body Tag Section -->
        <h2>About This Website</h2>
        <p>Hi! Welcome to the 3.0 version of my first project for the <a href="http://opentech.durhamcollege.org/pufferd/webd2201/">Web Development 1 Course</a> at Durham College.
            This website was created as a course requirement for Lab 1 and then improved and modified to meet Labs 2 and 3 requirements. Lab 1 consisted of creating the home, contact me and Lab 1 pages
            using the basic concepts of HTML that we have covered in weeks 1 and 2 of this course. During Lab 2 we used HTML tables to structure the pages and display content. Check out Lab 2 page for more on HTML tables.
            For Lab 3 we are using CSS to style the pages and bring our website to 20th century, we are also adding Lab 3 page to share a little about what we have learned about CSS in this module.</p>
        <p>This home page will tell you a bit about me, but please also check out <a href="./lab1.html">Lab 1</a> page for information of how get started using HTML, <a href="./lab2.html">Lab 2</a> page
            for how to use HTML tables, and <a href="./lab3.html">Lab 3</a> to learn how to get started on CSS. To get in touch with me, please visit <a href="./contactme.html">Contact Me</a>.</p>
        <div class="image-div">
          <a href="https://durhamcollege.ca/"><img class="dc-logo" src="./images/dc_college_logo.png" alt="Durham College Logo"/></a>
        </div>
      </div>
    <hr/>
    </div>
    <div class="colored-container">
      <div class="blue-text-div">
        <h2>About Me</h2>
        <p>I am a second-semester student of Computer Programming at <a href="https://durhamcollege.ca/">Durham College</a>, keen to explore and learn the incredible world of coding. I am graduated in hospitality,
          and most of my experience is related to customer service. I am originally from Brazil, but I moved to Canada with my husband in 2017, and now I am proud to call this wonderful
          country home &#x1F341;. For my contact information, please refer to the contact me page linked in the top of the page.</p>
          <div class="image-div">
            <img class="profile-pic" src="./images/kusika_profile_picture.png" alt="Profile Picture"/>
          </div>
      </div>
      <hr/>
    </div>

<?php

include ("./footer.php");
?>
