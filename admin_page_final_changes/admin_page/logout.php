<?php
//starts session if it is not active
if (session_status() === PHP_SESSION_NONE) {
         session_start();
}
	

// Destroy the session and clear session data
session_unset();
session_destroy();

// Clear session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page
header("Location: LoginPage.php");
exit();
?>
