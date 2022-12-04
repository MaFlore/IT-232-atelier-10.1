<?php
header("Content-Type: text/plain");
sleep(2);
if(isset($_REQUEST['nom']))
{ 
    $nom = $_REQUEST['nom'];
}
else if($nom == 0 ){
    $nom = "introuvable";
}
else
{
    $nom = "inconnu";
}

$gain = rand(0,100);

$resultat = $nom.':'.$gain;


echo $resultat;

?>