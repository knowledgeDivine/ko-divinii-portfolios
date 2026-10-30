<?php
require_once '../includes/config.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../membership.php');exit;}
$name=trim($_POST['name']??'');$email=trim($_POST['email']??'');$phone=trim($_POST['phone']??'');$type=trim($_POST['membership_type']??'');
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)||!$type){flash('error','Please complete the required membership fields.');header('Location: ../membership.php');exit;}
if(!$pdo){flash('error','Database connection unavailable. Import the SQL and check XAMPP MySQL.');header('Location: ../membership.php');exit;}
$stmt=$pdo->prepare('INSERT INTO membership_inquiries (name,email,phone,membership_type) VALUES (?,?,?,?)');$stmt->execute([$name,$email,$phone,$type]);flash('success','Your membership enquiry has reached the desk.');header('Location: ../membership.php');
