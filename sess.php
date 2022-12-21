<?php
 

$form = $_POST['from'];
$date = $_POST['come'];
$to   = $_POST['to'];
$dat  = $_POST['dat'];


session_start();
 $_SESSION['form'] = $form;
 $_SESSION['come'] = $date;
 $_SESSION['to']   = $to;
 $_SESSION['dat']  = $dat;

 include_once('select.php');
 
?>