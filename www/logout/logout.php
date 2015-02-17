<?php
// Initialize session
session_start();

// Delete certain session
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: Loginfinal.php');
?>