<?php
session_start();

$_SESSION['faculty']=false;

session_destroy();
header('Location: index.html');
?>