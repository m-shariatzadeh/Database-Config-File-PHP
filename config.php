<?php

// Notice!
// Please assign the following variables According to what is said in the documentation.
// If you want to enter only English data then it is better to delete the line 14.
 
try {
    $host    = "<HOST_NAME>";
    $DB_name = "<DATABASE_NAME>";
    $DB_user = "<DATABASE_USERNAME>";
    $DB_pass = "<DATABASE_PASSWORD>";

    $conn = new PDO("myssql:host=$host;dbname=$DB_name",$DB_user,$DB_pass);
    $conn->exec('set names utf8');
}
catch (PDOException $e)
{
    echo "<b style = 'color:red'>Error: </b>".$e;
}
