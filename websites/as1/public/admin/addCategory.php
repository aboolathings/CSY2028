<?php
session_start();
$pageTitle = 'iBuy - Admin - Add Category';
require '../layout.php';
$stylesheet = '../assets/ibuy.css';
if(isset($_SESSION['admin'])) { 
    echo 'Welcome, admin!';
}
else {
    "Sorry, you are not logged in or do not have the correct access level to view this page.";
}
$pageContent = '<h1>Categories Management - Add</h1>
        <a href="adminCategory.php">Go back to Categories</a>
        <form action="addCategory.php" method"POST">
    <label>Name:</label> <input type="text" name="name" />
    <label>Description:</label> <input type="text" name="description" />
    <input name=type="submit" value="Submit" "submit" />
    </form>';

if (isset($_POST['submit'])) {
        addCategory();
        echo '<p>Category added succesffully.</p>';
     }

?>