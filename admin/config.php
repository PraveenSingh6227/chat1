<?php
// $dbHost="localhost";
// $dbUsername="primeimm_prime_ur";
// $dbPassword="^tPXn]=&?V;(";
// $dbName="primeimm_prime_chat_db";


$dbHost="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="chat";

$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die(mysqli_connect_error());
date_default_timezone_set('Asia/Calcutta');
$currentTime=strtotime(date('d-m-Y  H:i:s'));

$currentDate = strtotime(date('Y-m-d'));
$currentSamay = date('Hi');
@session_start();
//error_reporting(0);
?>