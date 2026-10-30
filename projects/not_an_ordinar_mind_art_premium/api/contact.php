<?php
require __DIR__.'/../config/database.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../index.php#contact');exit;}
$n=trim($_POST['name']??'');$e=trim($_POST['email']??'');$m=trim($_POST['message']??'');
if($n===''||!filter_var($e,FILTER_VALIDATE_EMAIL)||$m===''){header('Location: ../index.php?error=1#contact');exit;}
$s=$pdo->prepare("INSERT INTO messages(name,email,message) VALUES(?,?,?)");$s->execute([$n,$e,$m]);
header('Location: ../index.php?sent=1#contact');exit;
?>