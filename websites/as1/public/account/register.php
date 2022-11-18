<?php
session_start();
$pageTitle = 'iBuy - Create Account or Login';
$pageContent = '<h1>Create Account or Login</h1>
    <p>If you are a new customer please enter your details below, otherwise click login.</p>
    <form action="register.php" method="POST">
    <label>First name:</label> <input type="text" name="first_name" />
    <label>Last name:</label> <input type="text" name="last_name" />
    <label>Email:</label> <input type="text" name="email" />
    <label>Password:</label> <input type="password" name="password" />
    <label>Confirm Password:</label> <input type="password" name="confirm_password" />
    <input name=type="submit" value="Submit" "submit" />
    </form>';
require '../layout.php';

if ($_POST["password"] === $_POST["confirm_password"]), (isset($_POST['submit'])) {
    addUser();
    echo '<p>Account created succesffully.</p>';
 }
 else {
    echo '<p>Passwords do not match, please try again.</p>';
 }
 
?>