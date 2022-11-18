<?php
session_start();
$pageTitle = 'iBuy - Admin - Categories';
require '../layout.php';
$stylesheet = '../assets/ibuy.css';
if(isset($_SESSION['admin'])) { 
        echo 'Welcome, admin!';
    }
    else {
        "Sorry, you are not logged in or do not have the correct access level to view this page.";
    }

$pageContent = '<h1>Categories Management</h1>
        <a href="addCategory.php">Add</a> <a href="editCategory.php">Edit</a> <a href="deleteCategory.php">Delete</a>
        <ul>
        Category 1
        Category 2
        Category 3
        Category 4
        Category 5
        </ul>';
?>