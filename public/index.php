<?php

session_start();

require "translation/translation.php"; 
require "language_cfg.php";

$_SESSION['language'] = 'en';

echo '<div><a href="recarta.php">recarta</a></div>';
echo '<br>';
echo '<div><a href="kneePain.php">knee</a></div>';
echo '<br>';
echo '<div><a href="treatment.php">treatment</a></div>';

$language = $_SESSION['language'];