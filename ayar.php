<?php
@session_start();
@header('Content-Type: text/html; charset=utf-8');
$host = "localhost";
$user = "furkano1";
$password = "Mehmetabi0";
$vt = "furkano1_cafe";
try{
    $baglan = new PDO("mysql:host=$host;dbname=$vt;charset=utf8;", $user, $password);
    $baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Veritabanı bağlantı hatası: " . $e->getMessage();
}