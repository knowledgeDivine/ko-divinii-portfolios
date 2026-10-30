<?php
require_once '../includes/config.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../book.php');exit;}
$name=trim($_POST['name']??'');$email=trim($_POST['email']??'');$date=$_POST['tee_date']??'';$time=$_POST['tee_time']??'';$players=(int)($_POST['players']??2);$notes=trim($_POST['notes']??'');
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)||!$date||!$time||$players<1||$players>4){flash('error','Please complete the required booking fields.');header('Location: ../book.php');exit;}
if(!$pdo){flash('error','Database connection unavailable. Import the SQL and check XAMPP MySQL.');header('Location: ../book.php');exit;}
$stmt=$pdo->prepare('INSERT INTO tee_bookings (name,email,tee_date,tee_time,players,notes) VALUES (?,?,?,?,?,?)');$stmt->execute([$name,$email,$date,$time,$players,$notes]);flash('success','Tee-time request submitted. The club will confirm your slot.');header('Location: ../book.php');
