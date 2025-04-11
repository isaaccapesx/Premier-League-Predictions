<?php
include "db_conn.php"; /* connects to database */
session_start();
$userid = $_SESSION['id'];

/*inputs gained from the form and set as variables */
$arsenal = $_POST['arsenal'];
$astonvilla= $_POST['villa'];
$bournemouth= $_POST['bournemouth'];
$brentford = $_POST['brentford'];
$brighton = $_POST['brighton'];
$chelsea = $_POST['chelsea'];
$crystalpalace = $_POST['crystalpalace'];
$everton = $_POST['everton'];
$fulham = $_POST['fulham'];
$leeds = $_POST['leeds'];
$leicester = $_POST['leicester'];
$liverpool = $_POST['liverpool']; 
$mancity = $_POST['mancity']; 
$manunited = $_POST['manunited']; 
$newcastle = $_POST['newcastle'];
$nottinghamforest = $_POST['nottinghamforest'];
$southampton = $_POST['southampton'];
$spurs = $_POST['spurs'];
$westham = $_POST['westham'];
$wolves = $_POST['wolves'];

/* user */
$users_score=0; /* users score */
$users_multiplier=0; /* if the multiplier is viable. set to 0 if prediction is incorrect. set to 1 if they predicted correctly. */
$multiplier = 1; /* the actual multipler */

/* GAME 1 */
if(!empty($arsenal) || (!empty($mancity))){ /* if the inputs for arsenal vs mancity is empty */
    if (is_numeric($arsenal)&& (is_numeric($mancity))){ /* checks the inputs if they are numbers */
        if(($arsenal==1) && ($mancity==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Arsenal vs Manchester City");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Arsenal vs Manchester City");
}
/* GAME 2 */
if(!empty($manunited) || (!empty($newcastle))){
    if (is_numeric($manunited)&& (is_numeric($newcastle))){
        if(($manunited==1) && ($newcastle==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Manchester United vs Newcastle United");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Manchester United vs Newcastle");
}
/* GAME 3 */
if(!empty($spurs) || (!empty($astonvilla))){
    if (is_numeric($spurs)&& (is_numeric($astonvilla))){
        if(($spurs==1) && ($astonvilla==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Tottenham Hotspurs vs Aston Villa");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Spurs vs Aston villa");
}
/* GAME 4 */
if(!empty($liverpool) || (!empty($brighton))){
    if (is_numeric($liverpool)&& (is_numeric($brighton))){
        if(($liverpool==1) && ($brighton==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Liverpool vs Brighton");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Liverpool vs Brighton");
}
/* GAME 5 */
if(!empty($fulham) || (!empty($brentford))){
    if (is_numeric($fulham)&& (is_numeric($brentford))){
        if(($fulham==1) && ($brentford==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Fulham vs Brentford");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Fulham vs Brentford");
}
/* GAME 6 */
if(!empty($chelsea) || (!empty($crystalpalace))){
    if (is_numeric($chelsea)&& (is_numeric($crystalpalace))){
        if(($chelsea==1) && ($crystalpalace==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Chelsea vs Crystal Palace");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Chelsea vs Crystal Palace");
}
/* GAME 7 */
if(!empty($westham) || (!empty($wolves))){
    if (is_numeric($westham)&& (is_numeric($wolves))){
        if(($westham==1) && ($wolves==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;  
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Westham vs Wolves");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Westham vs Wolves");
}
/* GAME 8 */
if(!empty($bournemouth) || (!empty($leeds))){
    if (is_numeric($bournemouth)&& (is_numeric($leeds))){
        if(($bournemouth==1) && ($leeds==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Bournemouth vs Leeds");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Bournemouth vs Leeds");
}

/* GAME 9 */
if(!empty($leicester) || (!empty($everton))){
    if (is_numeric($leicester)&& (is_numeric($everton))){
        if(($leicester==1) && ($everton==1)){ /* if the prediction is the same as the final score of that game */
            /* score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}
    else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Leicester vs Everton");
    }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Leicester vs Everton");
}

/* GAME 10 */
if(!empty($nottinghamforest) || (!empty($southampton))){
    if (is_numeric($nottinghamforest)&& (is_numeric($southampton))){
        if(($nottinghamforest==1) && ($southampton==1)){ /* if the prediction is the same as the final score of that game
            score function */
            $users_score = $users_score + 10;
            $users_multiplier = 1;
            $multiplier = $multiplier + 0.2;
            $users_score = $users_score * $multiplier;
        }else{
        $user_multiplier = 1;
        }}else{
        Header("Location: YourPredictions2.php?error=Enter a valid score for Nottingham Forest vs Southampton");
    }
}else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for Nottingham Forest vs Southampton");
}



if (!isset($_SESSION['id'])) {
    echo "Session variable 'id' is not set";
} else {
    $userid = $_SESSION['id'];
    $userid2 = $userid;
    $users_score = intval($users_score);
    $query = "INSERT INTO predictions (userid, users_score) VALUES ('$userid2', '$users_score')";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        echo "Error inserting data: " . mysqli_error($conn);
    } else {
        header("Location:YourPredictions2.php");
    }
}


?>
