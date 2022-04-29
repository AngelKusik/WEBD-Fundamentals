<?php
$file = "lab3.php";
$date = "February 24, 2022";
$title = "Lab 3";
$description = "This page was created as a Lab 3 requirement to demonstrate the use of CSS style selectors.";
$banner = "Lab 3";

include ("./header.php");
?>

        <h2>CSS Basics</h2>
        <p class="italic">Lab 3 introduces students to the use of Cascading Style Sheets or "CSS" to style HTML pages. During Lab 3
          students were challenged to use CSS style selectors to substitute any HTML styling properties used in previous Labs to style their websites,
          leaving behind the 80's look, and bringing their websites right into the 20th century. Using CSS is easy, check out the information below to learn how to use some basic CSS selectors.</p>
      <hr/>
      <br/>
      <br/>
      <div class="white-container">
        <div class="white-text-div">
          <!-- Body Tag Section -->
          <h2>CSS Style Selectors</h2>
          <p>CSS has a large set of styling properties that can be applied to each selector. The selector is usually a HTML tag name but, it is possible to
          create a special class or id to set a particular style property to an HTML tag. Here are some examples of style properties that were use to create the design of this website.</p>
          <h3>Styling the Body Tag</h3>
          <p>CSS offers a broad variety of styling properties. To create the current design I applied the following properties to the body of the page:</p>
          <table>
            <tr>
              <th class="top-left-radius">Property</th>
              <th class="top-right-radius">What it does</th>
            </tr>
            <tr>
              <td>color: light-blue;</td>
              <td class="light-blue-background">Sets the background color of the page to this light blue tone, unless otherwise specified.</td>
            </tr>
            <tr>
              <td>text-align: center;</td>
              <td class="center-aligned">Defines that all text displayed in the body of the page must be cetered. </td>
            </tr>
            <tr>
              <td>font-family: 'Merriweather', serif;</td>
              <td>Defines that all text displayed in the body must be from the specified family.</td>
            </tr>
            <tr>
              <td class="bottom-left-radius">margin: 0;</td>
              <td class="bottom-right-radius">Sets all margins to zero, no space around the body of the page. The background color takes up all the screen.</td>
            </tr>
          </table>
        </div>
        <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!-- hr Tag Section -->
            <h3>Styling the Horizontal Rule Tags</h3>
            <p>Horizontal rule or hr tag as it is are more often refered to, is the line that can be used to divided the page into different sections. Here are some properties that can be used to style an hr using CSS.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>border-color: blue;</td>
                <td>Sets the hr color to blue. The default color is a greyish color. <hr class="tiny-hr"/></td>
              </tr>
              <tr>
                <td>width: 10%;</td>
                <td>Sets the width to 10% of the screen.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">border-top-style: dotted;</td>
                <td class="bottom-right-radius">Even though it does not look like, an hr have 4 borders. To give mine this dotted effect I set the top border style to dotted and the remaining borders styles to none.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="white-container">
          <div class="white-text-div">
            <!-- a Tag Section -->
            <h3>Styling the anchor Tag</h3>
            <p>CSS offers a set of options that allows to set specific styling options to the different states that an anchor tag can have. For example, it is possible
            to set the color of a link to red if the user hovers over it, or to blue after the user has visited the page. Here are the style properties applied to each stage of the links in this page.</p>
            <table>
              <tr>
                <th class="top-left-radius">State</th>
                <th>Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>a:link</td>
                <td>color: light-green;</td>
                <td class="a-link-example">Sets the color of the text in the link to green while it is an unvisited link.</td>
              </tr>
              <tr>
                <td>a:visited</td>
                <td>color: red;</td>
                <td class="a-visited-example">Sets the color of the text in the link to red after the user visit/click on the link.</td>
              </tr>
              <tr>
                <td>a:hover</td>
                <td>color: blue;</td>
                <td class="a-hover-example">Sets the color of the text in the link to blue while the user hover over it.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">a:active</td>
                <td>color: orange;</td>
                <td class="bottom-right-radius a-active-example">Sets the color of the text in the link to orange when the user clicks on the link.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!-- p Tag Section -->
            <h3>Styling the Paragraph Tags</h3>
            <p>The paragraph or "p" tags are one of the most often used tags on a HTML document. These are style properties used to style the paragraphs in this page.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>font-weight:bold;</td>
                <td class="bold">Sets the text in a paragraph to bold.</td>
              </tr>
              <tr>
                <td>line-height: 2;</td>
                <td>Sets the distance between lines to 2 times the size of the font.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">color: dark-grey;</td>
                <td class="bottom-right-radius">Sets the paragraph text color to dark grey.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="white-container">
          <div class="white-text-div">
            <!-- table Tag Section -->
            <h3>Styling the Table Tags</h3>
            <p>As we learned in the previous Lab, tables are composed of 5 tags. In the next few examples, I will show some of the style properties I applied to each table tag to create the design you can see in this page tables.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>background-color: white;</td>
                <td>Sets the background color of the table to white.</td>
              </tr>
              <tr>
                <td>width: 100%;</td>
                <td>Sets the width of the table to 100% of the size of the div where it is placed (70% of the width of the screen.).</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">border-radius: 20px;</td>
                <td class="bottom-right-radius">Gives border corners this rounded effect.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!-- th Tag Section -->
            <h3>Styling the Table Header Tags</h3>
            <p>These are the style properties applied to the table headers or th tags.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>border: 2px solid black;</td>
                <td>Sets the border size to 2px, gives it a solid color aspect, and set the border color to black. The same properties were set for the table tag, but with a smaller size (1px).</td>
              </tr>
              <tr>
                <td>background-color: dark-grey;</td>
                <td>Sets the table header background to dark grey.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">color: white;</td>
                <td class="bottom-right-radius">Sets the text color to white.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="white-container">
          <div class="white-text-div">
            <!-- tr & td Tag Section -->
            <h3>Styling the Table Row and Table Data Tags</h3>
            <p>These are the style properties applied to the table row (tr tags) and table data tags (td tags).</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>padding: 10px;</td>
                <td>Sets the padding or white space around the text to 10px.</td>
              </tr>
              <tr>
                <td>text-align: left;</td>
                <td>Sets the text align to left.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">td:hover {background-color: light-grey;}</td>
                <td class="bottom-right-radius">Sets the background color of each data cell in the table to light grey when the user hover over it.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!-- div Tag Section -->
            <h3>Styling Div Tags</h3>
            <p>The acronym "div" stands to Content Division Element and this poweful tag is used to structure HTML pages.
            In the previous Lab we learned how to use HTML tables to structure our pages, but divs are the ideal tool for this task and since they are also an important element
            when it comes to use CSS I decided to incorporate them into my design. Here are some of the styling properties that I used to style the divs used to contain each blue and white text section of the page.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>background-color: white;</td>
                <td>Sets the background color to white. Some of the divs were set to have a light-blue background color using a special class, but I will get to that later.</td>
              </tr>
              <tr>
                <td>padding-top: 30px;</td>
                <td>Sets the top padding or white space as some may refer to it to 3% of the width.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">position: relative;</td>
                <td class="bottom-right-radius">This is a fun one. Position is a more advanced concept of CSS, but in resume this line sets the position of the div relative to where it would be displayed in the screen by default.
                For those interested in CSS, definetely worth to check this link <a href="https://www.w3schools.com/css/css_positioning.asp">W3Schools - CSS Layout</a> and this one <a href="https://www.w3schools.com/tags/tag_div.ASP">W3Schools - HTML div Tag</a>.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="white-container">
          <div class="white-text-div">
            <!-- classes Tag Section -->
            <h3>Styling CSS Classes</h3>
            <p>As briefly mentioned before, HTML tags are not the only option when it comes to CSS selectors. It is also possible to create a class
            to set styling properties to an element. Imagine that you have two paragraphs and one of them needs to be highlighted with a bright yellow background.
            How would you do that? Would you use an inline style tag? While using an inline style tag may work, a more suited solution is creating a class. To do so
            you just have to write class="classname" in the element that you want to modify, the same way you would add an inline style tag. To set the style properties
            you write in the CSS file .classname (the classname is whatever name you want to give it) and set the properties in the same way you would with any other selector.
            Classes can be used repeated times, so if later you decided to highlight an h1, for example, you just have to enter the same class in the element and done. Here are some
           of the style properties that I used to style a special class created for the Schedule Table on Lab 2 page.</p>
            <table>
              <tr>
                <th class="top-left-radius">Property</th>
                <th class="top-right-radius">What it does</th>
              </tr>
              <tr>
                <td>width: 70%;</td>
                <td>Sets the size of the table to 100% of the width of the div where it is placed.</td>
              </tr>
              <tr>
                <td>margin: 0 auto;</td>
                <td>Sets the top and bottom margin to zero and the left and right margins to display it in the center.</td>
              </tr>
              <tr>
                <td class="bottom-left-radius">background-color: white;</td>
                <td class="bottom-right-radius">Sets the background color to white.</td>
              </tr>
            </table>
          </div>
          <hr/>
        </div>
        <div class="colored-container">
          <div class="blue-text-div">
            <!-- id Tag Section -->
            <h3>Styling ID Classes</h3>
            <p>Similar to classes, ids can also be used as CSS style selector. The difference between classes and ids
            is that one element can have many classes, but only one id. Ids are meant to be unique, only used sparingly in situations
            where you need to apply a special style to an element that you will not be applying to any other. You can create an id in a similar
            fashion as you would create a class, but you must type id="idname" instead. Because ids are so unique, I have not used any in my design, but
            you can use any style property with an id.</p>
          </div>
          <hr/>
        </div>

      <?php

      include ("./footer.php");
      ?>
