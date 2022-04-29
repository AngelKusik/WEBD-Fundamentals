<?php
$file = "lab7_bond_info.php";
$date = "March 27,2022";
$title = "Lab 7 - Bond Movies";
$description = "This page is part of Lab 7 and addresses the Bond Movies table including the last 5 Bon Movies.";
$banner = "Lab 7";

include ("./header.php");

/**
 * Lab 7 - Bond Movies
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 27, 2022
 */
?>

<!-- Subtitle & Description Section -->
<h2>Bond Movies</h2>
<p>The information being displayed on the table below comes from the Movies and Actors Tables created on PostgreSQL.
To retrieve the table and display it here in this webpage we are using PHP and some Postgre methods. The first Postgre method that we need to use is pg_connect() which is used to
connect to the database, next we will use the pg_query() to send the information contained on pg_connect and a select statement specifing the data that we want from the table.
We are also using the pg_num_rows() which returns the number of rows that our select statement will return, and finally we are using the pg_fetch_result() to return the actual data contained in each selected row.</p>
<hr/>
<br/>
<br/>

<!-- Examples Section -->
<div class="white-container">
  <div class="white-text-div">
    <table>
      <tr>
        <th class="top-left-radius">Movie</th>
        <th>Year</th>
        <th class="top-right-radius">Actor</th>
      </tr>

      <?php
      $output = ""; //Set up a variable to store the output of the loop
      //connect
      $conn = pg_connect("host=127.0.0.1 dbname=kusika_db user=kusika password=140810");
      //N.B. replace the YOUR variables with your specific information
      //NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

      //issue the query
      $sql = "SELECT movies.title, movies.year, actors.name
      			FROM movies, actors
      			WHERE movies.actor=actors.id
      			ORDER BY movies.year ASC";
      	$result = pg_query($conn, $sql);
      	$records = pg_num_rows($result);

      //generate the table
      	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
      		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>";
      		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>";
      		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>";
      	}

	       echo $output; //display the output
?>
    </table>
<!-- end the table -->
  </div>
</div>

<?php

include ("./footer.php");
?>
