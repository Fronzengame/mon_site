<?php
$db_host="db5000115759.hosting-data.io";
$db_username="dbu181546";
$db_password="Theo1321!";
$db_name="dbs110282";


$db_connect     = mysqli_connect($db_host, $db_username, $db_password, $db_name);
//Verifier la co
if (mysqli_connect_error())
{
    echo "Erreur de co à MySQl: " . mysqli_connect_error();
}
//echo "<h1>Connected!</h1>";
