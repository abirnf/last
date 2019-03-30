<?php
//include fichier
include "config.php";
//appel fonction
$base = connect();
//recuperation des donnees
$e= $_REQUEST['email'];
$m= $_REQUEST['mdp'];

$req ="INSERT INTO users (id,email,password) VALUES (null,'$e','$m')";
//exec (insert,update,delete)--> type de retour (int/bool)
//int=nbr ligne inserer (itha rq saret b shiih)
//bool= avec la valeur false en cas d'echec
$resp=$base->exec($req);
if ($resp==1)
{
    echo "donnees inserer w jawhom behi";
}
else
{
echo "barra thabet f req wala fl fichier config";
}
?>