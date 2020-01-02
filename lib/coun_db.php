<?php



/* 
$db_host = "localhost";
$db_username = "mizanitc_24";
$db_pass = "8M{O9!2w{r(&";
$db_name = "mizanitc_megamall24";
 */
 
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "megamall_24";
    

@mysql_connect("$servername","$username","$password") or die("Could not connect to Mysql");
@mysql_select_db("$dbname") or die ("no database");

?>