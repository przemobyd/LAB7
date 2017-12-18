<?
if($_SESSION['log']!="true" && $_SESSION['user']<1) {?>
<form action="?act=login" method="post">
<input type="button" class="przycisk" value="Strona Główna" onclick="location.href='/LAB7/';"/>
<input type="text" name="login" class="pole" placeholder="Login" required/>
<input type="password" name="pass" class="pole" placeholder="Hasło" required/>
<input type="submit" class="przycisk" value="Zaloguj się"/>
<input type="button" class="pusty" value="Zarejestruj się" onclick="location.href='?act=register';"/>
</form>
<?
} else {
?>
<form action="?act=new" method="post">
<input type="button" class="przycisk" value="Strona Główna" onclick="location.href='/LAB7/';"/>
<input type="button" class="przycisk" value="^ W górę" onclick="location.href='?act=up';"/>
<input type="text" name="folder" required class="pole" placeholder="Nazwa Folderu"/>
<input type="submit" class="przycisk" value="+Nowy Folder"/>
<input type="button" class="pusty" value="Wyloguj się" onclick="location.href='?act=logout';"/>
</form><br/>
<form action="?act=przeslij" ENCTYPE="multipart/form-data" method="post">
<input type="file" name="plik" class="pole" required placeholder="Prześlij Plik"/>
<input type="submit" class="przycisk" value="Prześlij"/>
</form>
<?
}
?>