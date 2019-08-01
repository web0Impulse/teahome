<?php
 // Связь с базой данных

 $user = 'root';
 $host = 'localhost';
 $password = '';
 $charset = 'utf8';
 $db_name = 'teahome';

 $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=$charset",$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 
 ?>
