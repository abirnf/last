<?php
function connect()
{
$_SERVER = "localhost";
$base = "isg";
$username ="root";
$pass = "";

try
{
$con = new PDO("mysql:host=$server;dbname=base",$username,$pass);
return $con;
}catch (PDOExeption $e)
{

}
}
?>