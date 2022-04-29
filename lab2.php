<?php
$file = "lab2.php";
$date = "February 24, 2022";
$title = "Lab 2";
$description = "This page was created as a Lab 2 requirement to demonstrate the use of HTML tables to structure webpages and display information.";
$banner = "Lab 2";

include ("./header.php");
?>
        <br/>
        <br/>
        <h2>XHTML Basics and Special Characters</h2>
        <p class="italic">Lab 2 explores the use of HTML tables, presenting students with an opportunity to gain
        some hands-on experience creating tables to structure a webpage or to display information. Navigating
        through this page, you will see examples of how HTML tables can be used and learn what tags are needed to create a table yourself.</p>
        <hr/>
        <br/>

        <div class="white-container">
          <div class="white-text-div">
            <!--HTML Table Tags Section -->
            <h3>HTML Table Tags</h3>
            <p>Building a table using HTML is quick and easy, all you have to do is use the following 5 tags.</p>
            <table>
              <caption class="small-bold-example">HTML Table Tags</caption>
              <tr>
                <th class="top-left-radius">Tag</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>&lt;table&gt; <br/>&lt;/table&gt;</td>
                <td>This tag defines the table, it is the first tag to be entered in order to create a table.</td>
              </tr>
              <tr>
                <td>&lt;caption&gt;&lt;/caption&gt;</td>
                <td>This tag creates a caption right on the top of table. The use of this tag is optional. It must be nested within the row tags. </td>
              </tr>
              <tr>
                <td>&lt;th&gt;&lt;/th&gt;</td>
                <td>The header tag creates a header cell in the table identifying the content of each column. It's also an optional tag and must be nested within the row tags.</td>
              </tr>
              <tr>
                <td>&lt;tr&gt;&lt;/tr&gt;</td>
                <td>This tag creates the table rows. Use it repeatedly to create more rows. It must be nested within the table tags.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">&lt;td&gt;&lt;/td&gt;</td>
                <td class="bottom-right-radius">The data tag creates the cells. It must be nested within a pair of row tags. Can also be used repeatedly to create a number of cells.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!--Favorite Books Section -->
            <h3>Some of My Favorite Books</h3>
            <p>To practice the use of tables, I have created the one below to show some of my favorite books.</p>
            <table>
              <caption class="small-bold-example">My Top Three Favorite Books Lately</caption>
              <tr>
                <th class="top-left-radius">Book's Title</th>
                <th>Book's Author</th>
                <th>Year of Publication</th>
                <th class="top-right-radius">What it is about</th>
              </tr>
              <tr>
                <td>"A Brief History of Time"</td>
                <td>Stephen Hawking</td>
                <td>1988</td>
                <td>A Brief History of Time is a physics book, but it was meant for the general public so it is easy to understand. Stephen Hawking, one the brightest minds of all times, explores the concepts behind some profound questions such as how the universe begin and what are the boundaries of the universe. </td>
              </tr>
              <tr>
                <td>"Qual e a tua obra?"</td>
                <td>Mario Sergio Cortella</td>
                <td>2007</td>
                <td>This book was written by a famous brazilian philosopher and, unfortunately has no translation to English. The title of this book asks the readers the question "What is your work?" meaning what is your mission in the world, what will be your legacy? This book triggers some interesting and necessary reflections, really nice if you into philosophy. </td>
              </tr>
              <tr>
                <td class="bottom-left-radius">"The Sun is Also a Star"</td>
                <td>Nicola Yoon</td>
                <td>2016</td>
                <td class="bottom-right-radius">This book tells a very fresh and compeling love story, really nice if you looking for something light and easy to read. This book is special to me because it was the first book that I have read in English.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="white-container">
          <div class="white-text-div">
            <!--Academic Schedule Section -->
            <h3>Academic Schedule</h3>
            <p>The table below was created as a requirement for this Lab and replicates
            my current academic schedule. The main point of creating this time was making use of the rowspan
            and colspan properties that enable a cell to expand through other rows or cells respectively.</p>
          </div>
          <div class="schedule-table-div">
            <table>
              <caption>Academic Schedule</caption>
              <tr>
                <th class="top-left-radius"></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th class="top-right-radius">Sunday</th>
              </tr>
              <tr>
                <td rowspan="6">
                  8am
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td rowspan="11" class="orange-background small-bold-example">
                  LINU 4100-02<br/>
                  13811 Class<br/>
                  8:10 am -<br/>
                  10:00am<br/>
                  H-WING H134
                </td>
                <td></td>
                <td></td>
                <td rowspan="11" class="green-background small-bold-example">
                  WEBD 2201-02<br/>
                  14620 Class<br/>
                  8:10 am -<br/>
                  10:00am<br/>
                  G-WING G209
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
                <tr>
                  <td rowspan="6">
                    9am
                  </td>
                  <td></td>
                  <td></td>
                  <td rowspan="11" class="yellow-background small-bold-example">
                    GNED 1119 AA1<br/>
                    Money Matters<br/>
                    asynchronous<br/>
                    ONLINE
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    10am
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td rowspan="11" class="green-background small-bold-example">
                    WEBD 2201-02<br/>
                    14620 Class<br/>
                    10:10 am -<br/>
                    12:00pm<br/>
                    A-WING A150
                  </td>
                  <td rowspan="11" class="orange-background small-bold-example">
                    LINU 4100-02<br/>
                    13811 Class<br/>
                    10:10am -<br/>
                    12:00pm<br/>
                    H-WING H215
                  </td>
                  <td rowspan="11" class="pink-background small-bold-example">
                    OOP 2200-01<br/>
                    14121 Class<br/>
                    10:10am -<br/>
                    12:00pm<br/>
                    SOUTH SW214
                  </td><td >
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    11am
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="11" class="blue-background small-bold-example">
                    NETD 2202-01<br/>
                    14048 Class<br/>
                    11:10 am -<br/>
                    1:00pm<br/>
                    D-WING D203
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    12pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    1pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td rowspan="5" class="purple-background small-bold-example">
                    SYDE 2203-01<br/>
                    14537 Class<br/>
                    1:10pm -<br/>
                    2:00pm<br/>
                    ONLINE
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    2pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td rowspan="12" colspan="2" class="grey-background italic small-bold-example">
                    Weekend Study Hours
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td rowspan="5" class="blue-background small-bold-example">
                    NETD 2202-01<br/>
                    14048 Class<br/>
                    2:10pm -<br/>
                    3:00pm<br/>
                    ONLINE
                  </td>
                  <td rowspan="11" class="pink-background small-bold-example">
                    OOP 2200-01<br/>
                    14121 Class<br/>
                    2:10pm -<br/>
                    4:00pm<br/>
                    SOUTH SW214
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    3pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6">
                    4pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td rowspan="11" class="purple-background small-bold-example">
                    SYDE 2203-01<br/>
                    14537 Class<br/>
                    4:10pm -<br/>
                    6:00pm<br/>
                    SOUTH SW213
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td rowspan="6" class="bottom-left-radius">
                    5pm
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="bottom-right-radius"></td>
                </tr>
            </table>
          </div>
            <hr/>
        </div>
    <!--Footer Section -->
    <?php

    include ("./footer.php");
    ?>
