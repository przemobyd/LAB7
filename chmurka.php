<? session_start(); 
if($_GET['wyl']==1){
	$_SESSION['pracpass']='';
	$_SESSION['pracownik']='';
	header('Location: http://pas.czarek.art.pl/LAB6/start.php');
exit;
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Przemysław Czarnecki</title>
		<style>
BODY, HTML {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: rgb(255, 255, 255);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(63deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), -webkit-linear-gradient(-117deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), -webkit-linear-gradient(63deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), -webkit-linear-gradient(-117deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), -webkit-linear-gradient(0deg, rgb(27,27,27) 10px, rgba(0,0,0,0) 10px), -webkit-linear-gradient(-90deg, rgb(29,29,29) 25%, rgb(26,26,26) 25%, rgb(26,26,26) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 75%, rgb(36,36,36) 75%, rgb(36,36,36) 100%), rgb(19, 19, 19);
  background: -moz-linear-gradient(27deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), -moz-linear-gradient(207deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), -moz-linear-gradient(27deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), -moz-linear-gradient(207deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), -moz-linear-gradient(90deg, rgb(27,27,27) 10px, rgba(0,0,0,0) 10px), -moz-linear-gradient(180deg, rgb(29,29,29) 25%, rgb(26,26,26) 25%, rgb(26,26,26) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 75%, rgb(36,36,36) 75%, rgb(36,36,36) 100%), rgb(19, 19, 19);
  background: linear-gradient(27deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), linear-gradient(207deg, rgb(21,21,21) 5px, rgba(0,0,0,0) 5px), linear-gradient(27deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), linear-gradient(207deg, rgb(34,34,34) 5px, rgba(0,0,0,0) 5px), linear-gradient(90deg, rgb(27,27,27) 10px, rgba(0,0,0,0) 10px), linear-gradient(180deg, rgb(29,29,29) 25%, rgb(26,26,26) 25%, rgb(26,26,26) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 75%, rgb(36,36,36) 75%, rgb(36,36,36) 100%), rgb(19, 19, 19);
  background-position: 0 5px, 10px 0, 0 10px, 10px 5px, 0 0, 0 0;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: 20px 20px;
  background-size: 20px 20px;
}
A {
	color: #fff;
}
.black {
  background: #222;
}
.przycisk {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background: linear-gradient(180deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 3px 0 0 0 rgba(0,0,0,0.2) ;
  box-shadow: 3px 0 0 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.pusty {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 7px;
  border-radius: 7px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background: linear-gradient(180deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.pole {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 10px 20px;
  border: 1px solid #b7b7b7;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background: linear-gradient(180deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 1px 1px 8px 2px rgba(0,0,0,0.4) ;
  box-shadow: 1px 1px 8px 2px rgba(0,0,0,0.4) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.ramka {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  font: normal 16px/1 Verdana, Geneva, sans-serif;
  color: #fff;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgb(50,50,50);
  -webkit-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
  box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
  -webkit-transition: all 200ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 10ms;
  -o-transition: all 200ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 10ms;
  transition: all 200ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 10ms;
  -webkit-transform: rotateX(5deg) rotateY(-10deg)   ;
  transform: rotateX(5deg) rotateY(-10deg)   ;
  margin: 10px;
  padding: 10px;
}

.tabela {
	width: auto;
}
.tabela td {
	padding: 3px;
	text-align: center;
}
.tabela2 td {
	margin: 3px;
	padding: 3px;
	text-align: left;
	width: 150px;
}
.tabela3 {
	font-weight: bold;
}
</style>
	</head>
	<body>
<div id="top">
			<header id="NAGLOWEK" class="ramka"><h1 style="text-align: center;">LAB 6 Programowanie Aplikacji Sieciowych - 8:10 (420 2.2)</h1><small>Przemysław Czarnecki TIN GR1</small></header>
			<nav id="MENU" class="ramka">
			<input type="button" class="przycisk" value="Strona Główna" onclick="location.href='/';"/>
			<input type="button" class="przycisk" value="Wyloguj się" onclick="location.href='?wyl=1';"/>
			</nav>
			
			<article class="ramka">
			
<?
$dbhost="localhost"; 
$dbuser="czarnecki_pas"; 
$dbpassword="paskwaspas"; 
$dbname="czarnecki_paspas";

if($_SESSION['pracownik'] && $_SESSION['pracpass']) {
$user=$_SESSION['pracownik'];
$pass=$_SESSION['pracpass'];
} else {
$user=$_POST['login']; // login z formularza
$pass=$_POST['pass']; // hasło z formularza
}

$link = mysqli_connect($dbhost, $dbuser,$dbpassword, $dbname); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"ERROR: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków
$result = mysqli_query($link, "SELECT * FROM Pracownicy WHERE LoginP='$user'"); // pobranie z BD wiersza, w którym login=login z formularza
$rekord = mysqli_fetch_array($result); // wiersza z BD, struktura zmiennej jak w BD
if(!$rekord) //Jeśli brak, to nie ma użytkownika o podanym loginie
{
mysqli_close($link); // zamknięcie połączenia z BD
echo "Błędny login lub hasło! <a href='http://pas.czarek.art.pl/LAB6/start.php'>WRÓĆ!</a>";
}
else
{ // Jeśli $rekord istnieje
if($rekord['Haslo']==$pass) // czy hasło zgadza się z BD
{
if(!$_SESSION['pracownik'] && !$_SESSION['pracpass']){
$_SESSION['pracownik']=$user;
$_SESSION['pracpass']=$pass;
}
echo "Logowanie Ok. Witaj {$rekord['Imie']} !<br/>";

// STATY LOGOWANIA
$zap = "INSERT INTO `LogPrac` (`Id_lp`, `Data`, `IP`, `LoginP`, `Stat`, `Przegladarka`) VALUES (NULL, NULL, '".$_SERVER['REMOTE_ADDR']."', '".$rekord['LoginP']."', 'OK', '".$_SERVER['HTTP_USER_AGENT']."')";
mysqli_query($link, $zap);  // Zapis logowania do LOGu
//Odczyt ostatnich statystyk
$res = mysqli_query($link, "SELECT * FROM LogPrac WHERE LoginP='".$rekord['LoginP']."' AND Stat='OK' ORDER BY Data DESC LIMIT 1"); 
$rek = mysqli_fetch_array($res);
echo "Ostatnie poprawne logowanie: ".$rek['Data']." z ".$rek['Przegladarka'];
$res2 = mysqli_query($link, "SELECT * FROM LogPrac WHERE LoginP='".$rekord['LoginP']."' AND Stat='ERROR' ORDER BY Data DESC LIMIT 1"); 
$rek2 = mysqli_fetch_array($res2);
echo "<br/>Ostatnie nipoprawne logowanie: ".$rek2['Data']." ".$rek2['Przegladarka']."<br/>";

//STATY ZAPYTAŃ
echo "<br/>";
$pytanie = "SELECT COUNT(Id) AS Wszystkie FROM Komunikat";
$odpowiedz = mysqli_query ($link, $pytanie);
$wynik = mysqli_fetch_array ($odpowiedz);
echo "Wysłano łącznie: ".$wynik['Wszystkie']." zapytań!</br>";
$pytanie = "SELECT COUNT(Id) AS Wszystkie FROM Komunikat WHERE LoginP!=''";
$odpowiedz = mysqli_query ($link, $pytanie);
$wynik = mysqli_fetch_array ($odpowiedz);
echo "Odpowiedziano: ".$wynik['Wszystkie']." zapytań!</br>";
$pytanie = "SELECT COUNT(Id) AS Wszystkie FROM Komunikat WHERE LoginP='".$rekord['LoginP']."'";
$odpowiedz = mysqli_query ($link, $pytanie);
$wynik = mysqli_fetch_array ($odpowiedz);
echo "Ty odpowiedziałeś na: ".$wynik['Wszystkie']." zapytań!</br>";

//Jeśli wysłano zapytanie
if($_GET['wyb']==1){
	$zap = "UPDATE Pracownicy SET Id_Z='".$_POST['typ']."' WHERE LoginP='".$rekord['LoginP']."'";
mysqli_query($link, $zap);  // Zapisanie zapytania
}
if($_POST['odpowiedz'] && $_POST['id']){
	$zap = "UPDATE Komunikat SET TextP='".$_POST['odpowiedz']."', LoginP='".$rekord['LoginP']."' WHERE Id='".$_POST['id']."'";
mysqli_query($link, $zap);  // Zapisanie zapytania
}
// PREDYSPOZYCJE
?>
<br/><br/>
<form action="?wyb=1" method="post">
<table class="tabela">
<tr><td colspan="2" class="przycisk">MOJE PREDYSPOZYCJE</td></tr>
<tr><td class="pole">Wybierz zagadnienie:</td><td class="pole">
 <select name="typ">
<?
$z = "SELECT * FROM `Zagadnienia`";
$rezultat = mysqli_query ($link, $z);
while ($wiersz = mysqli_fetch_array ($rezultat))						
{
	$zaznacz="";
	if($wiersz['Id_z']==$rekord['Id_Z']) $zaznacz=' selected="selected"';
echo '<option value="'.$wiersz['Id_z'].'"'.$zaznacz.'>'.$wiersz['Typ'].'</option>';
}
?>
</select> </td></tr>
<tr><td colspan="2" class="przycisk"><input type="submit" value="ZMIEŃ PREDYSPOZYCJE!"/></td></tr>
</table>
<input type="hidden" name="login" value="<?echo $user;?>"/>
<input type="hidden" name="pass" value="<?echo $pass;?>"/>
</form><?
// ZAPYTANIA BEZ ODPOWIEDZI
?>
<br/><br/>
<table class="tabela">
<tr><td colspan="6" class="przycisk">ZAPYTANIA BEZ ODPOWIEDZI</td></tr>
<?
if($_GET['odp']){
$z = "SELECT * FROM `Komunikat`, `Zagadnienia` WHERE Komunikat.Id='".$_GET['odp']."' AND Komunikat.Id_z=Zagadnienia.Id_z";
$rezultat = mysqli_query ($link, $z);
while ($wiersz = mysqli_fetch_array ($rezultat))						
{
echo '<form action="pracownik.php" method="post"><tr><td class="pole">'.$wiersz['Id'].'<input type="hidden" value="'.$wiersz['Id'].'" name="id"></td><td class="pole">'.$wiersz['Typ'].'</td><td class="pole">'.$wiersz['TextK'].'</td><td class="pole"><input type="text" name="odpowiedz"></td><td class="pole">'.$wiersz['LoginK'].'</td><td class="pole"><input type="submit" value="WYŚLIJ"></td></tr></form>';
}
} else
{
?>
<tr><td class="pusty">Id</td><td class="pusty">Zapytanie</td><td class="pusty">Opis problemu</td><td class="pusty">Odpowiedź</td><td class="pusty">Klient</td><td class="pusty">Pracownik</td></tr>
<?
//Id 	LoginP 	Id_z 	TextK 	LoginP 	TextP 
$z = "SELECT * FROM `Komunikat`, `Zagadnienia` WHERE Komunikat.LoginP='' AND Komunikat.Id_z=Zagadnienia.Id_z AND Zagadnienia.Id_z='".$rekord['Id_Z']."'";
$rezultat = mysqli_query ($link, $z);
while ($wiersz = mysqli_fetch_array ($rezultat))						
{
//Id_k 	Imie 	Email 	LoginP 	Haslo 	Id 	LoginP 	Id_z 	TextK 	LoginP 	TextP 
echo '<tr><td class="pole">'.$wiersz['Id'].'</td><td class="pole">'.$wiersz['Typ'].'</td><td class="pole">'.$wiersz['TextK'].'</td><td colspan="3" class="pole"><a href="?odp='.$wiersz['Id'].'">ODPOWIEDZ!</a></td></tr>';
}
}
?></table><?
// HISTORIA ZAPYTAŃ
?>
<br/><br/>
<table class="tabela">
<tr><td colspan="6" class="przycisk">HISTORIA ZAPYTAŃ</td></tr>
<tr><td class="pusty">Id</td><td class="pusty">Zapytanie</td><td class="pusty">Opis problemu</td><td class="pusty">Odpowiedź</td><td class="pusty">Klient</td><td class="pusty">Pracownik</td></tr>
<?
//Id 	LoginP 	Id_z 	TextK 	LoginP 	TextP 
$z = "SELECT * FROM `Pracownicy`, `Komunikat`, `Zagadnienia` WHERE Pracownicy.LoginP='".$rekord['LoginP']."' AND Pracownicy.LoginP=Komunikat.LoginP AND Komunikat.Id_z=Zagadnienia.Id_z";
$rezultat = mysqli_query ($link, $z);
while ($wiersz = mysqli_fetch_array ($rezultat))						
{
//Id_k 	Imie 	Email 	LoginP 	Haslo 	Id 	LoginP 	Id_z 	TextK 	LoginP 	TextP 
echo '<tr><td class="pole">'.$wiersz['Id'].'</td><td class="pole">'.$wiersz['Typ'].'</td><td class="pole">'.$wiersz['TextK'].'</td><td class="pole">'.$wiersz['TextP'].'</td><td class="pole">'.$wiersz['LoginK'].'</td><td class="pole">'.$wiersz['LoginP'].'</td></tr>';
}
?></table><?
//end
}
else
{
$zap = "INSERT INTO `LogPrac` (`Id_lp`, `Data`, `IP`, `LoginP`, `Stat`, `Przegladarka') VALUES (NULL, '', '".$_SERVER['REMOTE_ADDR']."', '".$rekord['LoginP']."', 'ERROR', '".$_SERVER['HTTP_USER_AGENT']."')";
mysqli_query($link, $zap);  // Zapis logowania do LOGu
mysqli_close($link);
echo "Błędny login lub hasło! <a href='http://pas.czarek.art.pl/LAB6/start.php'>WRÓĆ!</a>";
}
}
?>


</article>
			<footer id="STOPKA" class="ramka"><small>Autor: Przemysław Czarnecki TIN 2017/18</small></footer>
		</div>
	</body>
</html>