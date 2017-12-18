<?
echo $err;
if($_SESSION['log']!="true" || $_SESSION['user']<1) {?>
Cześć, witaj w super panelu plikowym!
<?
if($_GET['act']=='register') {
	include('reg.php');
}
} else {
	
if($_GET['act']=='del') {
function removeDir($path) {
$dir = new DirectoryIterator($path);
foreach ($dir as $fileinfo) {
if ($fileinfo->isFile() || $fileinfo->isLink()) {
unlink($fileinfo->getPathName());
} elseif (!$fileinfo->isDot() && $fileinfo->isDir()) {
removeDir($fileinfo->getPathName());
}
}
rmdir($path);
}

if($_POST['folder']) {
 removeDir($_SESSION['dir']."/".$_POST['folder']);
 echo "Folder usunięty prawidłowo! ";
} else {
 unlink($_SESSION['dir']."/".$_POST['plik']);
 echo "Plik usunięty prawidłowo! ";
}
} else {
	
if(!$_SESSION['dir']) $_SESSION['dir'] = "foldery/".$rekord['folder'];

if($_GET['act']=='folder') {
$_SESSION['dir']=$_SESSION['dir']."/".$_POST['plik'];
}

if($_GET['act']=='new') {
$file_name=$_SESSION['dir']."/".$_POST['folder'];
if(!file_exists($file_name))
{
 mkdir($file_name, 0777);
}
else
{
 $end=0;
 $num=0;
 while($end==0)
 {
  $num++;
  if(!file_exists($file_name.$num))
  {
   mkdir($file_name.$num, 0777);
   $end=1;
  }
 }
}
}

if($_GET['act']=='przeslij') {
if (is_uploaded_file($_FILES['plik']['tmp_name']))
{
echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>';
move_uploaded_file($_FILES['plik']['tmp_name'], $_SESSION['dir']."/".$_FILES['plik']['name']);
}
else {echo 'Błąd przy przesyłaniu danych! ';}
}

if($_GET['act']=='up') {
$drzewo=explode("/", $_SESSION['dir']);
if ($_SESSION['dir']!="foldery/".$rekord['folder'])	{
$_SESSION['dir']="";
$cnt = count($drzewo)-1;
for( $x = 0, $cnt; $x < $cnt; $x++ ){
	if($_SESSION['dir']=="") {
		$_SESSION['dir'] = $drzewo[$x]; 
	} else {
		$_SESSION['dir'] = $_SESSION['dir']."/".$drzewo[$x]; 
	}
}
$_SESSION['dir'] = $_SESSION['dir'];
}
}
}
?>
Witaj <? echo $rekord['login'];?>! </br>Zalogowałeś się ale super! 
<?if ($rek['id']) echo "<p>Ostatnie błędne logowanie: ".$rek['data']." z IP: ".$rek['ip']." Przeglądarka: ".$rek['przegladarka']."</p><br/>"; ?>
<table>
<?php
$x=0;
$dir = $_SESSION['dir'];
function Foldery($dir) {
   $cdir = scandir($dir);
   foreach ($cdir as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
         {
            echo '<tr><td class="przycisk" style="width: 100%; ">
			'.$value.'/</td><td>
			<form name="'.$x.'" action="?act=del" method="post">
			<input type="hidden" name="folder" value="'.$value.'"/>
			<input type="submit" style="width:auto" class="pusty" value="USUŃ"/>
			</form></td><td>
			<form name="f'.$x.'" action="?act=folder" method="post">
			<input type="hidden" name="plik" value="'.$value.'"/>
			<input type="submit" style="width:auto" class="przycisk"  value="PRZEJDŹ"/>
			</form>
			</td></tr>
			';
			$x++;
         }
         else
         {
            echo '<tr><td class="pole" style="width: 100%;">'.$value;
			echo "</td>";
			echo '<td>
			<form name="'.$x.'" action="?act=del" method="post">
			<input type="hidden" name="plik" value="'.$value.'"/>
			<input type="submit" style="width=100%" class="pusty" value="USUŃ"/>
			</form>
			</td><td>
			<form name="b'.$x.'" action="bin/download.php" method="post">
			<input type="hidden" name="plik" value="'.$value.'"/>
			<input type="submit" style="width=100%" class="pole" value="POBIERZ"/>
			</form>
			</td>
			</tr>
			';
			$x++;

         }
      }
   }
}
Foldery($dir);
echo "</table>"; 
}
?>