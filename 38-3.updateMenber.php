<?php
include '39-1.PDO.dsn.php';
session_start();
if (!isset($_SESSION['id'])) header('Location:38.ID.PW.php');
$editid = $_SESSION['id'];
$account = $_GET['account'];
$password = $_GET['password'];
$realname = $_GET['realname'];
$sql = "update member set account ='{$account}',passwd='{$password}',realname='{$realname}' where id='{$editid}'";
$db = @new mysqli('127.0.0.1','root','root','kerpi');
$db->query($sql);
header('Location:38.ID.PW.php');