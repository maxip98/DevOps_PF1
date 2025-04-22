<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if ($username && $password) {
    echo "ok";
} else {
    echo "error";
}
?>
