<!-- gets scores from the database called users_prediction and then gives correct scores which inserts into database called predictions -->
<?php

include "db_conn.php"; /* connects to database */
$userid = $_SESSION['id']; /* gets the current session userid for further purposes in code */
$sql = "SELECT * FROM users_prediction"; /* selects everything in the database "users_prediction */
$result = mysqli_query($conn, $sql);
// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    /* Loop through each row */
    while ($row = mysqli_fetch_assoc($result)) {
    /*Store each team in a separate variable */
    
    $Arsenal = $row['Arsenal'];
    $Astonvilla = $row['Astonvilla'];
    $Bournemouth = $row['Bournemouth'];
    $Brentford = $row['Brentford'];
    $Brighton = $row['Brighton'];
    $Chelsea = $row['Chelsea'];
    $CrystalPalace = $row['CrystalPalace']; 
    $Everton = $row['Everton'];
    $Fulham = $row['Fulham'];
    $Leeds = $row['Leeds'];
    $Leicester = $row['Leicester'];
    $Liverpool = $row['Liverpool'];
    $Mancity = $row['Mancity'];
    $ManUnited = $row['ManUnited'];
    $Newcastle = $row['Newcastle'];
    $NottinghamForest = $row['NottinghamForest'];
    $Southampton = $row['Southampton'];
    $Spurs = $row['Spurs'];
    $Westham = $row['Westham'];
    $Wolves = $row['Wolves'];
}
} 
else {
echo "No results found";
}


/* user score variables */
$users_score=0; /* users score */
$multiplier = 1; /* the multipler for the score function */

    if(($Arsenal==1) && ($Mancity==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1; /* resets the multiplier */
}

if(($ManUnited==1) && ($Newcastle==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1; /* resets multiplier */
}

if(($Spurs==1) && ($Astonvilla==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}
if(($Liverpool==1) && ($Brighton==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;

    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($Fulham==1) && ($Brentford==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($Chelsea==1) && ($CrystalPalace==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($Westham==1) && ($Wolves==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($Bournemouth==1) && ($Leeds==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($Leicester==1) && ($Everton==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;
    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

if(($NottinghamForest==1) && ($Southampton==1)){ /* if the prediction is the same as the final score of that game */
    /* score function */
    $users_score = $users_score + 10;

    $multiplier = $multiplier + 0.2;
    $users_score = $users_score * $multiplier;
}else{
$multiplier = 1;
}

    $users_score = intval($users_score); /* makes the users score as an integer */
    echo"$users_score";
    $query = "INSERT INTO predictions VALUES(NULL, '$userid', '$multiplier', '$users_score')"; /* inserts data into the database called "predictions" */
    mysqli_query($conn, $query);


?>