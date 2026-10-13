<?php
session_start();
try{$db=new PDO('mysql:host=localhost;dbname=quickbite;charset=utf8mb4','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);}catch(PDOException $e){exit('Database unavailable: import database.sql and check config.php');}
function h($x){return htmlspecialchars((string)$x,ENT_QUOTES,'UTF-8');}
function go($x){header('Location: '.$x);exit;}
function csrf(){return $_SESSION['csrf']??=bin2hex(random_bytes(32));}
function verify(){if(!hash_equals(csrf(),$_POST['csrf']??'')){http_response_code(403);exit('Invalid CSRF token');}}
function auth(){if(empty($_SESSION['id']))go('login.php');}
function admin(){auth();if(($_SESSION['role']??'')!=='admin'){http_response_code(403);exit('Forbidden');}}
function head($title){echo '<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><meta charset="utf-8"><title>'.h($title).' - QuickBite</title><link rel="stylesheet" href="style.css"></head><body><header><a href="index.php"><b>🍔 QuickBite</b></a><nav><a href="index.php">Menu</a><a href="cart.php">Cart</a>';if(!empty($_SESSION['id'])){echo '<a href="orders.php">Orders</a>';if(($_SESSION['role']??'')==='admin')echo '<a href="admin.php">Admin</a>';echo '<a href="logout.php">Logout</a>';}else echo '<a href="login.php">Login</a><a href="register.php">Register</a>';echo '</nav></header><main>';}
function foot(){echo '</main><footer>QuickBite • Student demonstration • ETB</footer></body></html>';}
