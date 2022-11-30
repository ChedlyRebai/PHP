<?php
require("./client.php");

$cl=new Client();
$cl->insert($_POST['ncin'],$_POST['nom'],$_POST['prenom'],$_POST['telephone']);
header('Location:../view/ajoutclient.php');



?>