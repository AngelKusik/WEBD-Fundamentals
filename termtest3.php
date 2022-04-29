<?php
$file = "termtest3.php";
$date = "April 19,2022";
$title = "Term Test 3";
$description = "This page was created as a term test 3 practice requirement.";
$banner = "Term Test 3";

include ("./header.php");

/**
 * Term Test 3
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 April 19, 2022
 * Course WEBD2201
 */

?>
    <h3>Term Test 3</h3>
    <p>This is the page created as part of the third term test for WEBD2201. NOTE: if you add a new course to test this page, the courses in the table are ordered reversed alphabetically based on the course code you entered.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <!--Sticky form and validation block -->
        <?php
          //Variable Declarations
          //initialize the variables in this scope to enable the reset/clear button functionality.
          $course_code = "";
          $course_title = "";
          $gpa_weighting = "";
          $output = "";
          $error = "";

          if($_SERVER["REQUEST_METHOD"] == "GET"){
            //default mode when the page loads the first time
	          //set variables to default value (blank in this case) when page loads in get mode.
	          $course_code = "";
            $course_title = "";
            $gpa_weighting = "";
            $is_valid = "";

            display_courses_table($output, $error);
          }else if($_SERVER["REQUEST_METHOD"] == "POST"){
            //connect to the server
            $connect = db_connect();
            //the page got here from submitting the form, so let's validate the data.
            //get the data from each field on the form and remove white-space
	          $course_code = trim($_POST["course_code"]);
            $course_title = trim($_POST["course_title"]);
            $gpa_weighting = trim($_POST["gpa_weighting"]);

            //validate user data entered on the form.

            //validate course code using validate_course_code() (from includes/functions)
            $is_valid = validate_course_code($course_code, $error);
            if($is_valid == false)
            {
              //if course code is not valid, reset it
              $course_code = "";
            }

            //validate course title using validate_course_title() (from includes/functions)
            $is_valid = validate_course_title($course_title, $error);
            if($is_valid == false)
            {
              //if course title is not valid, reset it
              $course_title = "";
            }

            //validate gpa using validate_gpa() (from includes/functions)
            $is_valid = validate_gpa($gpa_weighting, $error);
            if($is_valid == false)
            {
              //if gpa is not valid, reset it
              $gpa_weighting = "";
            }

            //if there are no errors carry on
            if(strlen($error) == 0)
            {
              //Add the data entered on the form to the database.
              //create a query to insert the data on the database
              $query = "INSERT INTO courses(code, title, weighting)
              VALUES('$course_code', '$course_title', '$gpa_weighting')";

              //use pg_query function to send it to the database
              $query_result = pg_query($connect, $query);

              //check if query was successful
              if($query_result)
              {
                //if so, update the output table to show the new course added
                display_courses_table($output, $error);
                //display a message confirming course was successfuly added to database
                $output .= "The course '" . $course_title . " (" . $course_code . ")' has been added to the system.";
                //empty out variables on the form.
                $course_code = "";
                $course_title = "";
                $gpa_weighting = "";
              }
            }
          }
        ?>
        <!--Error messages are displayed above the form -->
        <h3><?php echo $error; ?></h3>
        <h3>Please enter a Course Code, Course Title and a GPA Weighting.</h3>
        <br/>
        <!-- Form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <table style="border:1; background-color:#D2ECF9;">
            <tr>
              <td class="smaller-bold-example top-left-radius" style="border:1">Course Code*:</td>
              <td class="top-right-radius" style="border:1"><input type="text" name="course_code" size="30" value="<?php echo $course_code; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">New Course Record   Course Title*:</td>
              <td style="border:1"><input type="text" name="course_title" size="30" value="<?php echo $course_title; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example bottom-left-radius" style="border:1">GPA Weighting:</td>
              <td class="bottom-right-radius" style="border:1;"><input type="text" name="gpa_weighting" size="30" value="<?php echo $gpa_weighting; ?>"/></td>
            </tr>
          </table>
          <p><input type="submit" name="add_course" value="Add Course"/>
          <input type="reset" name="clear" value="   Clear   "/></p>
        </form>
        <p><?php echo $output; ?></p>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
