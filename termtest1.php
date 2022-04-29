<?php
$file = "termtest1.php";
$date = "February 24, 2022";
$title = "Term Test 1";
$description = "This file was created for the term test 1.";
$banner = "Term Test 1";

include ("./header.php");
?>

      <!-- About this Webite Section-->
    <h2>WEBD 2201</h2>
    <p>This webpage will implement several topics that have been covered in the Web Development - Fundamentals (<a class="bold" href="../webd2201">WEBD2201</a>) course this semester. This page will implement the XHTML 1.0 Transitional standard (see validation image below), is laid out using HTML tables, and is styled using Cascading Style Sheet.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
            <tr>
              <td class="top-left-radius top-right-radius bold" colspan="4">Countries: Their Flags &amp; Currencies</td>
            </tr>
            <tr>
              <th>Country</th>
              <th>Flag</th>
              <th>Currency Symbol</th>
              <th>Canadian Conversion</th>
            </tr>
            <tr>
              <td>Canada</td>
              <td><img class="logo-test" src="./images/flags/canada.png" alt="Canada Flag"/></td>
              <td>Canadian Dollar</td>
              <td>$1.00CND = $1.00CND</td>
            </tr>
            <tr>
              <td>France</td>
              <td><img class="logo-test" src="./images/flags/france.png" alt="Canada Flag"/></td>
              <td rowspan="2">Euro</td>
              <td rowspan="2">$1.00CND = &euro;0.6929</td>
            </tr>
            <tr>
              <td>Germany</td>
              <td><img class="logo-test" src="./images/flags/germany.png" alt="Canada Flag"/></td>
            </tr>
            <tr>
              <td>United Kingdow</td>
              <td><img class="logo-test" src="./images/flags/uk.png" alt="Canada Flag"/></td>
              <td>British Pound</td>
              <td>$1.00CND = &pound;0.6929</td>
            </tr>
            <tr>
              <td>USA</td>
              <td><img class="logo-test" src="./images/flags/usa.png" alt="Canada Flag"/></td>
              <td>U.S. Dollar</td>
              <td>$1.00CND = $0.7863USD</td>
            </tr>
            <tr>
              <td class="bottom-left-radius bottom-right-radius" id="right-aligned" colspan="4">Currency conversions came from <a href="http://bankofcanada.ca/rates/exchange/currency-converter/">Bank of Canada</a></td>
            </tr>
          </table>
      </div>
    <hr/>
    </div>

<?php

include ("./footer.php");
?>
