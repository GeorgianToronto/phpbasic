<?php
  class validate{
    //Function to check empty fields
    public function checkEmpty($data, $fields){
      $msg = null;
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg .= "<p>$value field empty</p>";
        }
      }
      return $msg;
    }
    //Function to check course hours
    public function validCourseHours($coursehours){
      // check to see if the course hour is numeric
      if (preg_match("/^[0-9]+$/", $coursehours)){
        return true;
      }
      return false;
    }
    // check to see if our email follows the email format
    public function validEmail($email){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      return false;
    }
  }
?>