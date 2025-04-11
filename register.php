<?php
  include "db_conn.php"; /*connects to my database*/
  /* inputs from the form */
  $fname = $_POST['fname']; /*first name*/
  $sname = $_POST['sname']; /* surname */
  $uname = $_POST['uname'];/*username */
  $email = $_POST['email'];/*email */
  $conemail = $_POST['Conemail']; /*confirms email */
  $password = $_POST['password']; /*password*/
  $conpassword = $_POST['Conpassword']; /*confirms password*/
  
  /*if fields are empty*/
  if (empty($fname) || empty($sname) || empty($uname) || empty($email) || empty($conemail)|| empty($password)|| empty($conpassword)) {
    header("Location: signup.php?error=Please fill in all required fields.");
    exit();
  }
  /* if email does not contain the symbol '@' */
  if (strpos($email, '@') === false) {
    header("Location: signup.php?error=Email address is invalid.");
    exit();
  }
  /* password does not meet the requirements */
  if (strlen($password) < 10 || !preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[\'^£$%&*()}{@#~?!><>,|=_+¬-]/', $password)) {
    header("Location: signup.php?error=Password must have at least 10 characters, contain a capital letter, a number, and a special character.");
    exit();
  }

  $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE username ='$uname' OR email ='$email'"); /* checks the username and email collums of the database.
  if data is the a copy it means its a duplicate */
  if(mysqli_num_rows($duplicate) > 0)
    {
      header("Location: signup.php?error=Username or email has already been taken."); /* duplicate means cant sign up with same email */
    }
  else{
        if(($password == $conpassword) AND ($email == $conemail)){ /* if the passwords and emails are identical to the confirmed ones*/
          $query = "INSERT INTO registration VALUES(NULL, '$fname', '$sname', '$uname', '$email', '$password')"; /* inserts data into registration */
          mysqli_query($conn, $query);
          header("Location:index2"); /* locates them to index2 where the index is different */
        }
      }
?>