<?php
session_start();
$pageTitle = 'iBuy - Login or Create Account';
$pageContent = '<h1>Login or Create Account</h1>
    <p>If you are an existing customer please enter your details below, otherwise click register.</p>
    <form action="login.php" method="POST">
    <label>Email:</label> <input type="text" name="email" />
    <label>Password:</label> <input type="password" name="password" />
    <input name=type="submit" value="Submit" "submit" />
    </form>';
require '../layout.php';
$stylesheet = '..assets.ibuy.css';

?>