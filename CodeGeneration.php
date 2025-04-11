<!-- making a unique code for the league-->
<?php
    session_start();
    include "db_conn.php"; /* connects to database */
    $leaguename = $_POST['LeagueName1']; /* from "createleague.php */
    $userid = $_SESSION['id']; /* sessionid */
    $leagueid = rand(); /* random number for league */
    
  if (empty($leaguename)){
    $leagueid = "Enter League name to find your code";
  }



    $duplicate = mysqli_query($conn, "SELECT * FROM league WHERE code ='$leagueid'"); /* checks the username and email collums of the database.
    if data is the a copy it means its a duplicate */
    if(mysqli_num_rows($duplicate) > 0)
    {
      header("Location: index2.php?error=League code already exists"); /* if duplicate does occur */
    }
    else{
        $query = "INSERT INTO league VALUES(NULL, '$leaguename', '$leagueid', '$userid')"; /* inserts data into league */
        mysqli_query($conn, $query);
        header("Location:createleague.php");
    }
?>