<?php
include("dbconnect.php");
session_start();
if (!isset($_POST["code"])) {
    $_POST["code"]='';
}
$_SESSION["code"]=$_POST["code"];


 
if (empty($_SESSION["code"])) {
    echo "Veuillez saisir le code";
}
else {
    echo "Erreur";
}
?>
<form action="admin.php" method="post">
             <input type="text" name="code" placeholder="Tapez votre code" />
             
            <input type="submit" name="connexion" value="Connexion" />
        </form>
    

                    
<p>

                    
                    


