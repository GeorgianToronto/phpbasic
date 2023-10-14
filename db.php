<!DOCTYPE html>
<html>
  <head>
    <title>Insert Data</title>
  </head>
  <body>
    <?php
       //Adding validate.php file
       include_once ('validate.php');
       //Connection variables
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "training";
      //Object oriented connection object
      $conn = new mysqli($servername,$username,$password,$dbname);
      // Check connection
      if ($conn -> connect_error) {
        echo "Failed to connect to database: " . $conn -> connect_error;
        exit();
      }
      // create validate objects
      $valid = new validate();
      // Taking all values from the input form
      if(!empty($_POST)){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $coursehours = $_POST['coursehours'];
        //Checking validity of the fields
        $msg = $valid->checkEmpty($_POST, array('fname', 'lname', 'email','phone','coursehours'));
        $checkCourseHours = $valid->validCourseHours($_POST['coursehours']);
        $checkEmail = $valid->validEmail($_POST['email']);
        // Handling any empty fields
        if($msg != null){
          echo $msg;
          //link to the previous page
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        elseif(!$checkCourseHours){
          echo '<p>Please provide a valid course hours.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        elseif(!$checkEmail){
          echo '<p>Please provide a valid email.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        else{
        // if all the fields are valid
        //Insert query
        $isql="insert into training.enrolled (fname, lname, email, phone, coursehours)
        values ('$fname', '$lname', '$email', '$phone', $coursehours)";
        //Check update
        if ($conn ->query($isql) === TRUE) {
          echo "You have enrolled successfully";
          echo "<br><br>";
          echo "<a href='view.php'>View Result</a>";
        }
        else {
          echo "Error: " . $isql . "<br>" . $conn->error;
        }
        $conn->close();
        }
        
      }
    ?>
  </body>
 </html>