<?php

$allowed_languages = ["en", "lt"];
$language = isset($_GET["lang"]) && in_array($_GET["lang"], $allowed_languages) ? $_GET["lang"] : "en";

if ($language == "en") {
    $img_src = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/gb.svg";
} else {
    $img_src = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/lt.svg";
}