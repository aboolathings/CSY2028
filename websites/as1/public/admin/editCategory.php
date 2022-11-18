<?php
session_start();
$pageContent = '';
require '../layout.php';
if(isset($_SESSION['admin'])) { 
    echo 'Welcome, admin!';
}
else {
    "Sorry, you are not logged in or do not have the correct access level to view this page.";
}
?>