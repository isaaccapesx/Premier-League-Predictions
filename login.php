<?php
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) { /* gets the submitted information from the forms */

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']); /* declares the variables */
    $pass = validate($_POST['password']);/* declares the variables */

    if (empty($uname)) /* if the username field is empty */
    { 
        header("Location: index.php?error=User Name is required"); /*redirects user to index page so they can attempt to log in again */
        exit();
    }

    else if(empty($pass))   /* if the password field is empty */
    { 
        header("Location: index.php?error=Password is required");  /*redirects user to index page so they can attempt to log in again */
        exit();
    }

    else
    {
        $sql = "SELECT * FROM registration WHERE username='$uname' AND password='$pass'"; /* selects all from the registration table. the username colum and makes it the variable. same with the password*/
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) { /* if the connection is working, email and password are correct  */
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass)  /* if the submitted username and password is equal to the same row in the database */
            {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index2.php"); /* redirects the user to a new page where the home page is different */
                exit();
            }
            else{
                header("Location: Index.php?error=Incorect User name or password"); /* if username or password is incorrect, redirect user to index page */
                exit();
            }
        }
        else
        {
            header("Location: index.php?error=Incorect User name or password"); /* if username or password is incorrect, redirect user to index page */
            exit();
        }
    }
}
