<?
if(!$_POST['login'] && !$_POST['pass']) {?>
<form action="?act=register" method="post">
<input type="text" name="login" class="pole" placeholder="Login" required /><br/>
<input type="password" name="pass" class="pole" placeholder="Hasło" required /></br>
<input type="submit" class="przycisk" value="Zarejestruj się"/>
</form>
<?
} else {
	$us=stripslashes($_POST['login']);
	$rr = mysqli_query($link, "SELECT * FROM users WHERE login='$us'");
	$r = mysqli_fetch_array($rr); 
		if(!$r) //Jeśli brak, to nie ma użytkownika o podanym loginie
		{
			$uniqe=uniqid();
			mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `pass`, `folder`) VALUES (NULL, '".$us."', '".stripslashes($_POST['pass'])."', '".$uniqe."');");
			mysqli_query($link, "INSERT INTO `uprawnienia` (`idU`,`user`,`admin`,`moderator`,`zwykly`) VALUES (NULL, '".$uniqe."', '0','0','1');");
			mkdir("./foldery/".$uniqe, 0777);
			echo "<p>Użytkownik dodany pomyślnie!</p>";
		} else {
			echo "<p>Użytkownik o takiej nazwie już istnieje! Użytkownicy z LAB7 i LAB8 działają na obu portalach!</p>";
		}
}
?>