<?php
include('header.php');
$filePath = "../".$_SESSION['dir']."/";
$fileName = $_POST['plik'];

$fd = fopen($filePath.$fileName,"r");
$size = filesize($filePath.$fileName);
$contents = fread($fd, filesize($filePath.$fileName));

fclose($fd);

header("Content-Type: application/octet-stream");
header("Content-Length: $size;");
header("Content-Disposition: attachment; filename=$fileName");

echo $contents;
?>