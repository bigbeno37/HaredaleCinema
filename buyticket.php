<?php
    require('Session.php');
    session_start();

    // Create a new session instance, and instantiate it based on the submitted details
    $session = new Session;
    $session->time = $_POST["session"];
    $session->seats = $_POST["seats"];
    
    // If there isn't an array set for the respective movie in the session,
    // set an array
    if (!isset($_SESSION[$_POST["movie"]])) {
        $_SESSION[$_POST["movie"]] = [];
    }
    
    // After verifying the array exists (or if it doesn't, creating one), push the
    // newly created session instance into the array for later access
    array_push($_SESSION[$_POST["movie"]], $session);
    
    // Redirect back to the showing page
    header('Location: showing.php');
?>

<?php /* include_once("/home/eh1/e54061/public_html/wp/debug.php");*/ ?>
