<?php
$name=$_POST["name"];
$pass=$_POST["pass"];
?>


<?php

$file=fopen("test.txt","a");
fwrite($file,$name);
fwrite($file,$pass);
fclose($file);

?>

