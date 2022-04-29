<?php
$file = "lab1.php";
$date = "February 24, 2022";
$title = "Lab 1";
$description = "This page was created as a Lab 1 requirement to demonstrate the use of HTML tags in the constuction of webpages.";
$banner = "Lab 1";

include ("./header.php");
?>

   <br/>
   <br/>
   <h2>XHTML Basics and Special Characters</h2>
   <p class="italic">Learn how to use a number of cool XHTML tags and special characters with the examples below.</p>
   <br/>
   <hr/>
   <br/>

  <!-- Einstein's Relativity Section -->
    <div class="white-container">
      <div class="white-text-div">
        <h3>Einstein's Relativity</h3>
        <p>In order to write Einstein's Relativity formula, for example, we will be using the superscript tag (&lt;sup&gt;...&lt;/sup&gt;)
        which allows us to write an exponent, the italic tag (&lt;i&gt;...&lt;/i&gt;) which, well... makes text italic, and the bold tag (&lt;b&gt;...&lt;/b&gt;)
        that (guess what) highlights text making it bold. We will also be using the h2 tag, the second-lagest heading tag available in HTML.</p>
        <h2 class="bold-example italic">E = mc<sup>2</sup></h2>
      </div>
      <hr/>
    </div>
    <div class="colored-container">
      <div class="blue-text-div">
        <!-- Currency Conversion Section -->
        <h3>Currency Conversion</h3>
        <p>In this section, we will explore the use of special characters, such as currency characters.
        To write the pound, euro, and yen simbols we simply have to add an ampersand character (&amp;) before the word pound, euro or yen and a semicolon right after.</p>
        <h2 class="bold-example">$1.00CND = $0.703USD = &pound;0.487 = &euro;0.651 = &yen;82.77</h2>
      </div>
      <hr/>
    </div>
    <div class="white-container">
      <div class="white-text-div">
        <!-- Code Snippet Section -->
        <h3>Code Snippet</h3>
        <p>Here to represent a code snippet, the code tag is being used, which modifies the look of the text making it look more like code.
        To write the special characters &lt; and &gt; we use an ampersand (&amp;), "lt" or "gt" followed by a semicolon. Finally, to include the tab space before the
        count and return lines we write ampersand + nbsp + semicolon four times. Each time adds one space resulting in the same effect as a tab would have. The initials "nbps" stand to no break space. </p>
        <h2 class="bold-example code-snippet" ><code>#include &lt;iostream.h&gt;<br/>
        int main()<br/>
        {<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;count &lt;&lt; "Hello world!" &lt;&lt; endl;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br/>
        }<br/></code></h2>
      </div>
      <hr/>
    </div>
    <div class="colored-container">
      <!--Chemistry Equation Section -->
      <div class="blue-text-div">
        <h3>Chemistry Equation</h3>
        <p>In this example we will be using the subscription tag (&lt;sub&gt;...&lt;/sub&gt;) to write a chemistry equation.
        Similar to the superscript tag used for Einstein's Relativity formula example, the subscription tag allows us to
        write the coefficient of each element.</p>
        <h2 class="italic bold-example">2H<sub>2</sub> + O<sub>2</sub> =&gt; 2H<sub>2</sub>O + heat</h2>
      </div>
      <hr/>
    </div>
    <div class="white-container">
      <div class="white-text-div">
        <!--Ordered Lists Section -->
        <h3>Ordered Lists</h3>
        <p>Lists are very useful tools and can be very easy to implement using HTML. To create an ordered list, like the one in the example below,
        we can use the ordered list tag (&lt;ol&gt;...&lt;/ol&gt;) to create the list and the list tag to identify each element in
        the list (&lt;li&gt;...&lt;/li&gt;) which must be nested within the ordered list tags to work.</p>
        <h3 class="smaller-bold-example">How to Make an Omelette:</h3>
        <ol>
          <li class="regular-list smaller-bold-example">Beat the eggs.</li>
          <li class="regular-list smaller-bold-example" >Melt the butter.</li>
          <li class="regular-list smaller-bold-example" >Add the eggs.</li>
          <li class="regular-list smaller-bold-example" >Fill the omelette.</li>
          <li class="regular-list smaller-bold-example" >Fold and Serve.</li>
        </ol>
      </div>
      <hr/>
    </div>
    <div class="colored-container">
      <div class="blue-text-div">
        <!--Unordered Lists Section -->
        <h3>Unordered Lists</h3>
        <p>Unordered lists are pretty similar to ordered lists, but they do not show the number beside each element, just a bullet point.
        To create an unordered list we use the unoredered list tag (&lt;ul&gt;...&lt;/ul&gt;), and the list tag to identify each element in
        the list (&lt;li&gt;...&lt;/li&gt;) in the same way as we would in an ordered list. To write the ampersand that we see in the example below
        we have to use the ampersand symbol (&amp;) followed by "amp" and a semicolon.</p>
        <h3 class="smaller-bold-example">To Do List:</h3>
        <ul>
          <li class="regular-list smaller-bold-example">Finish WEBD2201 Lab 3.</li>
          <li class="regular-list smaller-bold-example">Review OOP lecture.</li>
          <li class="regular-list smaller-bold-example">Pick up groceries &amp; cook dinner.</li>
        </ul>
      </div>
      <hr/>
    </div>

    <?php

    include ("./footer.php");
    ?>
