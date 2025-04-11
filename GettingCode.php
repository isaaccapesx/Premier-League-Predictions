<?php

include "db_conn.php"; /* connects to database */
$userid = $_SESSION['id']; /* gets the current session userid for further purposes in code */
$sql = "SELECT * FROM league"; /* selects everything in the database "league */
$result = mysqli_query($conn, $sql);
// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $code = $row['code'];
    }
} 
else {
echo "No results found";
}
if(empty($code)){
    $code = 0;
}
?>