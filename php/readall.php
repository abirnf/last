<?php
//include fichier
include "config.php";
//appel fonction
$base = connect();

$req="SELECT * from users";
$result = $base->query($req);
//fechObject/fechAssoc (convertion en objet)
while ($user=$result->fetchObject())
{
echo $user->email." ".$user->password;
}
?>