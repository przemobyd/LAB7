<?
session_start();
$dbhost="localhost"; 
$dbuser="czarnecki_pas"; 
$dbpassword="paskwaspas"; 
$dbname="czarnecki_paspas";

$user=$_POST['login']; // login z formularza
$pass=$_POST['pass']; // hasło z formularza
$link = mysqli_connect($dbhost, $dbuser,$dbpassword, $dbname); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"ERROR: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków
?>