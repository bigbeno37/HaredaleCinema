<?php

    require('Session.php');
    session_start();
    
    // If the user only has one ticket for the respective movie, just unset the whole array
    if (count($_SESSION[$_POST["movie"]]) === 1) {
        unset($_SESSION[$_POST["movie"]]);
    } else {
        // Otherwise, go through the array and determine which elements in the array
        // share the same time as the one given in the POST request
        for ($i = 0; $i < count($_SESSION[$_POST["movie"]]); $i++) {
            if ($_SESSION[$_POST["movie"]][$i]->time === $_POST["date"]) {
                // and finally unset the respective element, removing it from the array
                unset($_SESSION[$_POST["movie"]][$i]);
            }
        }
    }

    // Redirect back to the cart
    header('Location: cart.php');
?>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>