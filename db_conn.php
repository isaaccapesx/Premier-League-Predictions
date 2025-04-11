<?php
/* connections to database*/

$sname= "localhost"; /* servername */
$unmae= "root"; /*username of database */
$password = ""; /* no password */
$db_name = "scores"; /* database name */
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}