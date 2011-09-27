<?php

    // Configuration
    require_once("config/config.php");   // Common Configuration Variables
    require_once("config/auth.php");     // Basic Authentication
    
    // Check if Attempted to Login
    $logging = isset($_POST["login"]);
    if ($logging) {
        // Retrieve Username and Password
        $username = isset($_POST["username"]) ? $_POST["username"] : false;
        $password = isset($_POST["password"]) ? $_POST["password"] : false;
        // Authenticate
        $login_success = login($username, $password);
    } else {
        // Didn't Submit Login Form
        // Therefore Unsuccesful Login
        $login_success = false;
    }
    
?>

<html>
    <head>
        <title><? echo($splash_title); ?></title>
    </head>
    <body>
        <h1><? echo($splash_title); ?> Login</h1>
        <?
            // Check if Login was Successful
            if ($login_success) {
                // Login Successful
                // Render Login Continue Button
                renderLoginButton($cat_gateway);
            } else {
                // Render Login Form
                renderLogin($splash_url, $logging);
            }
        ?>
    </body>
</html>