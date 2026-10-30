<?php
require_once '../includes/config.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../contact.php');exit;}
$name=trim($_POST['name']??'');$email=trim($_POST['email']??'');$subject=trim($_POST['subject']??'');$message=trim($_POST['message']??'');
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)||!$message){flash('error','Please enter your name, email and message.');header('Location: ../contact.php');exit;}
if(!$pdo){flash('error','Database connection unavailable. Import the SQL and check XAMPP MySQL.');header('Location: ../contact.php');exit;}
$stmt=$pdo->prepare('INSERT INTO contact_messages (name,email,subject,message) VALUES (?,?,?,?)');$stmt->execute([$name,$email,$subject,$message]);flash('success','Message sent to the concierge.');header('Location: ../contact.php');
