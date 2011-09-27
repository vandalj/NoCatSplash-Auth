<?php

    // I wrote this file to be easily replaced, if my basic authentication doesn't suit
    // your needs just re-write your own. :)
    
    // Authentication Ideas: Check against a flat file or a SQL DB (I.e: MySQL)

    // Basic (Static) Authentication
    function login($username, $password) {
        
        // Basic Users PHP Array/DB
        $db_users   = array(
            "admin",   auth_hash("password"), // I would recommend just storing the hash values here instead.
            "user",    auth_hash("test")      // The point was just to display basic webserver-agnostic authentication though.
        );
        
        // Search DB for User name
        $i = array_search($username, $db_users);
        
        // User name found in array
        if ($i >= 0) {
            // Make sure element is a user name
            if (($i % 2) == 0) {
                // Retrieve Password from DB
                $checking = $db_users[$i+1];
                $password = auth_hash($password);
                // Check Password
                if ($password == $checking) {
                    // Authentication Passed
                    return true;
                }
            }
        }
        
        // Failed Authentication
        return false;
    }

    // Just your basic md5 hashing function with a bit of salt.
    function auth_hash($input) {
        return md5("!SALT!" . $input . "?SALT?");
    }

    // For rendering the successful login button.
    function renderLoginButton($cat_gateway) {
        echo('<p>Login Successful!</p>
              <form name="login" method="post" action="http://' . $cat_gateway . ':5280/">  
                <input type="hidden" name="accept_terms" value="yes" />
                <input type="hidden" name="redirect" value="http://' . $cat_gateway . ':5280/" />
                <input type="hidden" name="mode_login" />
                <input type="submit" value="Continue" />
              </form>
              <script type="text/javascript">document.login.submit();</script>');
    }
    
    // For rendering the login form.
    function renderLogin($splash_url, $logging) {
        echo(($logging ? "<p>Invalid username and password!</p>" : "") .
             '<form name="login" method="post" action="' . $splash_url . '/index.php">  
                <input type="hidden" name="login" value="1" />
                <label>Username:</label> <input type="text" name="username" /><br />
                <label>Password:</label> <input type="password" name="password" /><br />
                <input type="submit" value="Login" />
              </form>');
    }

?>