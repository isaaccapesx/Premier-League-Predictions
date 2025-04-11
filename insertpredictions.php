<!--inserts predictions into a datbase called users_prediction-->


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

/* GAME 1 */
if(!empty($arsenal) || (!empty($mancity))){ /* if the inputs for arsenal vs mancity is empty */
    if (!is_numeric($arsenal)&& (!is_numeric($mancity))){ /* checks the inputs if they are numbers */
        header("Location: YourPredictions2.php?error=Enter a valid score for Arsenal vs Manchester City");
        }
}
else{
    header("Location: YourPredictions2.php?error=Enter a valid score for Arsenal vs Manchester City");
}

/* GAME 2 */
if(!empty($manunited) || (!empty($newcastle))){ /* if the inputs for man united vs newcastle is empty */
    if (!is_numeric($manunited)&& (!is_numeric($newcastle))){ /* checks the inputs if they are numbers */
        header("Location: YourPredictions2.php?error=Enter a valid score for man united vs newcastle");
        }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for man united vs newcastle");
}
/* GAME 3 */
if(!empty($spurs) || (!empty($astonvilla))){ /* if the inputs for spurs  vs aston villa is empty */
    if (!is_numeric($spurs)&& (!is_numeric($astonvilla))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for spurs vs aston villa");
        }
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for spurs vs aston villa");
}

/* GAME 4 */
if(!empty($liverpool) || (!empty($brighton))){ /* if the inputs for liverpool vs brighton is empty */
    if (!is_numeric($liverpool)&& (!is_numeric($brighton))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for liverpool vs brighton ");
        }
       
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for liverpool vs brighton");
}

/* GAME 5 */
if(!empty($fulham) || (!empty($brentford))){ /* if the inputs for fulham vs brentford is empty */
    if (!is_numeric($fulham)&& (!is_numeric($brentford))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for fulham vs brentford ");
        }
       
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for fulham vs brentford");
}

/* GAME 6 */
if(!empty($chelsea) || (!empty($crystalpalace))){ /* if the inputs for chelsea  vs crystal palace is empty */
    if (!is_numeric($chelsea)&& (!is_numeric($crystalpalace))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for chelsea vs crystal palace ");
        }
        
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for chelsea vs crystal palace");
}
/* GAME 7 */
if(!empty($westham) || (!empty($wolves))){ /* if the inputs for westham  vs wolves is empty */
    if (!is_numeric($westham)&& (!is_numeric($wolves))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for westham vs wolves");
        }
    }
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for westham vs wolves");
}

/* GAME 8 */
if(!empty($bournemouth) || (!empty($leeds))){ /* if the inputs for bournemouth vs leeds is empty */
    if (!is_numeric($bournemouth)&& (!is_numeric($leeds))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for bournemouth vs leeds ");
        }
    
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for bournemouth vs brentleedsord");
}

/* GAME 9 */
if(!empty($leicester) || (!empty($everton))){ /* if the inputs for leicester vs everton is empty */
    if (!is_numeric($leicester)&& (!is_numeric($everton))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a valid score for leicester vs everton ");
        }
    
}
else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for leicester vs everton");
}

/* GAME 10 */
if(!empty($nottinghamforest) || (!empty($southampton))){ /* if the inputs for nottingham  vs southampton is empty */
    if (!is_numeric($nottinghamforest)&& (!is_numeric($southampton))){ /* checks the inputs if they are numbers */
        Header("Location: YourPredictions2.php?error=Enter a number for nottinghamforest vs southampton ");
        }
    }

else{
    Header("Location: YourPredictions2.php?error=Enter a valid score for nottinghamforest vs southampton");
}



    $query = "INSERT INTO users_prediction VALUES (NULL, '$userid', '$arsenal', '$astonvilla', '$bournemouth', '$brentford', '$brighton', '$chelsea', '$crystalpalace', '$everton', '$fulham', '$leeds', '$leicester', '$liverpool', '$mancity', '$manunited', '$newcastle', '$nottinghamforest', '$southampton', '$spurs', '$westham', '$wolves')";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        echo "Error inserting data: " . mysqli_error($conn);
    } else {
        header("Location:YourPredictions2.php");
    }


?>