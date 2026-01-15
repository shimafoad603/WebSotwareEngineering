<<?php
require "AuthController.php";
require "LoginUI.php";

use UserManagement\AuthController;

$auth = new AuthController();

$result = $auth->Login("admin", "1234");

if ($result) {
    echo "Login successful ";
} else {
    echo "Login failed ";
}
