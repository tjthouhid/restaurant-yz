<?php

	
$dbname = 'restaurant-yz';
$user = 'root';
$pass = '';
$host = 'localhost';


// OOP way
$db = new mysqli($host, $user, $pass, $dbname);
if(mysqli_connect_errno())
{
    die('The connection to the database could not be established.');
}
$sSQL= 'SET CHARACTER SET utf8'; 
mysqli_query($db,$sSQL)
or die ('Can\'t charset in DataBase');