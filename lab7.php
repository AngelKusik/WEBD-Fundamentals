<?php
$file = "lab7.php";
$date = "March 27,2022";
$title = "Lab 7 - Database Intro";
$description = "This page was created as a Lab 7 requirement and it is the first to use a PostgreSQL database to feed content to the page through PHP.";
$banner = "Lab 7";

include ("./header.php");

/**
 * Lab 7 - Database Intro
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 27, 2022
 */
?>

<!-- Subtitle & Description Section -->
<h2>Database Intro</h2>
<p>Lab 7 introduces the use of a database to feed information to a webpage. We will be using PostgreSQL to create tables and then we will
retrieve the information stored on the tables and display it on the webpage. Please check out the links below for more information. </p>
<hr/>
<br/>
<br/>
<!-- Examples Section -->
<div class="white-container">
  <div class="white-text-div">
    <h2>Databases Intro</h2>
    <p>The first two links below will retrieve the information contained in the tables "James Bond Movies" and "Favorite Automobiles" that were created on Postgre.
    The last two links will take you to the scripts that were used to create and feed information to each of the tables so you can see how the entire process works.</p>
    <ol>
      <li class="regular-list smaller-bold-example"><a href="./lab7_bond_info.php">James Bond Movies Table</a></li>
      <li class="regular-list smaller-bold-example"><a href="./lab7_auto_info.php">Favorite Automobiles Table</a></li>
      <li class="regular-list smaller-bold-example"><a href="./sql/lab7_bond_movies.sql">James Bond PostgreSQL Script</a></li>
      <li class="regular-list smaller-bold-example"><a href="./sql/lab7_auto_records.sql">Automobiles PostgreSQL Script</a></li>
    </ol>
  </div>
</div>

<?php

include ("./footer.php");
?>
