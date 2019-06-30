<?php
include("dbconnect.php");
$expediteur=$_REQUEST['expediteur'];
$mail=$_REQUEST['mail'];
$date=new DateTime();
$date = $date->format('Y-m-d H:i:s');
$msg=mysqli_real_escape_string($db_connect,$_REQUEST['message']);

$query=mysqli_query($db_connect,"INSERT INTO mail (expediteur, mail, date, message) VALUES ('$expediteur','$mail', '$date', '$msg')") or die(mysqli_error($db_connect));
$escpstr =$_POST['message'];
$escpstr = mysqli_real_escape_string($db_connect,$escpstr);
$retour = mail('theo.cuartiella@theo-cuartiella.fr', 'Envoi depuis le site theo-cuartiella.fr', $_POST['message'], $_POST['mail']);
mysqli_close($db_connect);
header("location:index.php?note=success");

?>