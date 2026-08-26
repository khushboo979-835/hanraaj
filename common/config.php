<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
ini_set('display_errors', 0);

$base_url = "/";
$base_path = dirname(__DIR__) . "/";

// DATABASE CONNECTION (Graceful fallback)
$conn = @mysqli_connect(
    "localhost",
    "u467991428_hansrajuser",
    "K0hHeXRc?",
    "u467991428_hansrajdb"
);

if (!$conn) {
    $conn = false;
}
?>