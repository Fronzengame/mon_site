
<?php
include("dbconnect.php");
session_start();
if (!isset($_POST["code"])) {
    echo "Vous devez vous authentifier";
}
else {
    $_SESSION["code"]=$_POST["code"];
    $result =mysqli_query($db_connect,"SELECT COUNT(*) FROM admin WHERE code=PASSWORD('".$_SESSION["code"]."')") or die(mysqli_error($db_connect));

	$code=mysqli_fetch_array($result );
  	
    if ($code['COUNT(*)'] == 1)
    {
        echo "Bienvenue sur la page d'administration (chantier)";
        
    }
    else
    {
        echo "Mot de passe incorrect";
    }
}
    
?>