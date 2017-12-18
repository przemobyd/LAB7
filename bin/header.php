<?
session_start();
$dbhost="localhost"; 
$dbuser="czarnecki_pas"; 
$dbpassword="paskwaspas"; 
$dbname="czarnecki_pas3";

$user=$_POST['login']; // login z formularza
$pass=$_POST['pass']; // hasło z formularza
$file=$_POST['file']; // plik z formularza

if(!$_COOKIE['err']) {setcookie("err", 0, time()+(3600*24));}

$link = mysqli_connect($dbhost, $dbuser,$dbpassword, $dbname); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"ERROR: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

if($_GET['act']=='login' && $_POST['login'] && $_POST['pass']) {
if($_COOKIE['err']<=3) {
	$result = mysqli_query($link, "SELECT * FROM users WHERE login='$user'"); // pobranie z BD wiersza, w którym login=login z formularza
	$rekord = mysqli_fetch_array($result); // wiersza z BD, struktura zmiennej jak w BD
		if(!$rekord) //Jeśli brak, to nie ma użytkownika o podanym loginie
		{
			mysqli_close($link); // zamknięcie połączenia z BD
			$err= "Błędny login lub hasło!"; 
		}
	else
		{ // Jeśli $rekord istnieje
		if($rekord['pass']==$pass) // czy hasło zgadza się z BD
			{
				$_SESSION['log']="true";
				$_SESSION['user']=$rekord['id'];
				$_SESSION['dir'] = "foldery/".$rekord['folder'];
				$ip = $_SERVER['REMOTE_ADDR'];
				$przegladarka = $_SERVER["HTTP_USER_AGENT"];
				mysqli_query($link, "INSERT INTO `userlog` (`id`, `user`, `data`, `err`, `ip`, `przegladarka`) VALUES (NULL, '".$rekord['id']."', NULL, 0, '".$ip."', '".$przegladarka."')");
				setcookie("err", 0, time()+(3600*24));
			}
		else
			{
				$ip = $_SERVER['REMOTE_ADDR'];
				$przegladarka = $_SERVER["HTTP_USER_AGENT"];
				mysqli_query($link, "INSERT INTO `userlog` (`id`, `user`, `data`, `err`, `ip`, `przegladarka`) VALUES (NULL, '".$rekord['id']."', NULL, 1, '".$ip."', '".$przegladarka."')");
				mysqli_close($link);
				$err= "Błędny login lub hasło!"; 
				setcookie("err", $_COOKIE['err']+1, time()+(3600*24));
			}
		}
} else {
$err = "<p style='color:red; font-weight:bold;'>Za duża liczba błędnych logowań, ban na 24h! Pozdro!</p>";
}
}
if($_SESSION['log']=="true" && $_SESSION['user']>0) {
	$result = mysqli_query($link, "SELECT * FROM users WHERE id='".$_SESSION['user']."'"); 
	$rekord = mysqli_fetch_array($result);
	$re = mysqli_query($link, "SELECT * FROM userlog WHERE err=1 AND user='".$_SESSION['user']."' ORDER BY id DESC LIMIT 1"); 
	$rek = mysqli_fetch_array($re);
}
if($_GET['act']=='logout') {
	$_SESSION['log']="false";
	$_SESSION['user']='';
	$_SESSION['dir']='';
}

?>