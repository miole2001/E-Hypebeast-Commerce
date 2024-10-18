<?php
session_start();
include 'connection.php';

// Log user logout activity if session is set
if (isset($_SESSION['username'])) {
    $userName = $_SESSION['username'];
    $activityType = 'Logged Out';
    $systemType = 'HypeBeast';

    $user_type = $_SESSION['user_type']; // Retrieve user_type from session

    $logSql = "INSERT INTO logs (username, action, user_type, system_type) VALUES ('$userName', '$activityType', '$user_type', '$systemType')";
    if(mysqli_query($connforMyOnlineDb, $logSql)) {
        echo "Log successfully inserted.";
    } else {
        echo "Error: " . mysqli_error($connforMyOnlineDb);
    }
}
// Destroy the session
session_unset();
session_destroy();

// Redirect to the login page
header("location: index.php");
?>
