<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$allowed_languages = ["en", "lt"];

if (isset($_POST['lang'])) {
    $language = in_array($_POST['lang'], $allowed_languages) ? $_POST['lang'] : "en";
    $_SESSION['language'] = $language;
}

if ($_SESSION['language'] == "en") {
    $img_src = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/gb.svg";
} else {
    $img_src = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/lt.svg";
}