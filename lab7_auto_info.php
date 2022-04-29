<?php
$file = "lab7_auto_info.php";
$date = "March 27,2022";
$title = "Lab 7 - Automobiles";
$description = "This page is part of Lab 7 and addresses Favorite Automobiles table.";
$banner = "Lab 7";

include ("./header.php");

/**
 * Lab 7 - Automobiles
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 27, 2022
 */
?>

<!-- Subtitle & Description Section -->
<h2>Automobiles Table</h2>
<p>In this example we are using the same PostrgreSQL method calls that we used on the James Bond Movies example.
However, this time we are retrieving information from the Automobiles Table which contains data about my favorite cars.</p>
<hr/>
<br/>
<br/>

<!-- Examples Section -->
<div class="white-container">
  <div class="white-text-div">
    <table>
      <tr>
        <th class="top-left-radius">Make</th>
        <th>Model</th>
        <th>Year</th>
        <th class="top-right-radius">MSRP</th>
      </tr>

      <?php
      $output = ""; //Set up a variable to store the output of the loop
      //connect
      $conn = pg_connect("host=127.0.0.1 dbname=kusika_db user=kusika password=140810");
      //N.B. replace the YOUR variables with your specific information
      //NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

      //issue the query
      $sql = "SELECT make, model, year, msrp
      			FROM automobiles
      			ORDER BY msrp DESC";
      	$result = pg_query($conn, $sql);
      	$records = pg_num_rows($result);

      //generate the table
      	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
      		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>";
      		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>";
      		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>";
          $output .= "\n\t\t<td>$".pg_fetch_result($result, $i, "msrp")."</td>\n\t</tr>";
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
