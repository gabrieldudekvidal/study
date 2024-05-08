<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (isset($_SESSION["user_id"])) { // Check if the user is logged in

    if (!isset($_SESSION["last_regeneration"])) {
        regenerateSessionIDLoggedIn(); // Call function
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval ) {
            regenerateSessionIDLoggedIn(); // Call function to regenerate the session
        }
    } 
    
} else { // If not logged in run the code below
 
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id(); // Call function
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval ) {
            regenerate_session_id(); // Call function to regenerate the session
        }
    } 
}

// Create a function to not use duplicated code inside if

function regenerateSessionIDLoggedIn() {
    session_regenerate_id(true);

    $userID = $_SESSION["user_id"];
    $newSessionID = session_create_id();
    $sessionID = $newSessionID . "_" . $userID;
    session_id($sessionID);

    $_SESSION["last_regeneration"] = time();
}

function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}

