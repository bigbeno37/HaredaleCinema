<?php
    // Determine if the user has tickets by first determining if the specific session key has
    // a set value, and then checking if that value (an array) has a size greater than 0
    function userHasTickets() {
        if (($_SESSION["AC"])) {
            if (count($_SESSION["AC"]) > 0) {
                return true;
            }
        }

        if (isset($_SESSION["AF"])) {
            if (count($_SESSION["AF"]) > 0) {
                return true;
            }
        }

        if (isset($_SESSION["CH"])) {
            if (count($_SESSION["CH"]) > 0) {
                return true;
            }
        }

        if (isset($_SESSION["RC"])) {
            if (count($_SESSION["RC"]) > 0) {
                return true;
            }
        }

        return false;
    }

    // Convert an encoded date-time into legibile english
    // Eg MON-01 becomes Monday 1PM
    function toFormattedDate($time) {
        $date = "";

        $prefix = substr($time, 0, 3);
        $suffix = substr($time, 4, 6);

        if ($prefix === "MON") {
            $date .= "Monday ";
        } else if ($prefix === "TUE") {
            $date .= "Tueday ";
        } else if ($prefix === "WED") {
            $date .= "Wednesday ";
        } else if ($prefix === "THU") {
            $date .= "Thursday ";
        } else if ($prefix === "FRI") {
            $date .= "Friday ";
        } else if ($prefix === "SAT") {
            $date .= "Saturday ";
        } else if ($prefix === "SUN") {
            $date .= "Sunday ";
        }

        if ($suffix === "01") {
            $date .= "1PM";
        } else if ($suffix === "03") {
            $date .= "3PM";
        } else if ($suffix === "06") {
            $date .= "6PM";
        } else if ($suffix === "09") {
            $date .= "9PM";
        } else if ($suffix === "12") {
            $date .= "12PM";
        }

        return $date;
    }

    // Converts the category of a movie into its respective movie title
    function toMovieTitle($category) {
        if ($category === "AC") {
            return "War for the Planet of the Apes";
        } else if ($category === "CH") {
            return "The Emoji Movie";
        } else if ($category === "RC") {
            return "The Big Sick";
        } else if ($category === "AF") {
            return "Dunkirk";
        }
    }

    function calculateGrandTotal($session) {
        $grandTotal = 0;

        if ($session["AC"]) {
            foreach ($session["AC"] as $currentSession) {
                $grandTotal += $currentSession->calculateTotal();
            }
        }

        if ($session["CH"]) {
            foreach ($session["CH"] as $currentSession) {
                $grandTotal += $currentSession->calculateTotal();
            }
        }

        if ($session["AF"]) {
            foreach ($session["AF"] as $currentSession) {
                $grandTotal += $currentSession->calculateTotal();
            }
        }

        if ($session["RC"]) {
            foreach ($session["RC"] as $currentSession) {
                $grandTotal += $currentSession->calculateTotal();
            }
        }

        $grandTotal = number_format($grandTotal, 2, ".", "");

echo <<<EOL
        <div>
            <h4>Grand Total: $$grandTotal</h4>
        </div>
EOL;
    }

    function getSeatType($seatType) {
        if ($seatType == "SF") {
            return "Standard (Full)";
        } else if ($seatType == "SP") {
            return "Standard (Concession)";
        } else if ($seatType == "SC") {
            return "Standard (Child)";
        } else if ($seatType == "FA") {
            return "FirstClass (Adult)";
        } else if ($seatType == "FC") {
            return "FirstClass (Child)";
        } else if ($seatType == "BA") {
            return "Beanbag (Adult)";
        } else if ($seatType == "BF") {
            return "Beanbag (Family)";
        } else if ($seatType == "BC") {
            return "Beanbag (Child)";
        }
    }

    // Generates each row that is to be displayed on the cart screen
    function generateTicket($movieCategory) {
        // If the user has tickets for this movie, display them
        if (count($_SESSION[$movieCategory]) > 0) {

            $sessions = $_SESSION[$movieCategory];
            $title = toMovieTitle($movieCategory);

            // Print the title of the movie
echo <<<EOL
            <div class="row ticket">
                <div class="row">
                    <div class="twelve columns">
                        <h1>$title</h1>
                    </div>
                </div>
EOL;
                // Go through each ticket for the respective movie and print them out
                foreach($sessions as $session){
                    $sessionDate = toFormattedDate($session->time);
                    $price = $session->calculateTotal();
                    $time = $session->time;
echo <<<EOL
                    <div class="row ticket">
                        <div class="row">
                            <div class="twelve columns">
                                <h2>$sessionDate</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="twelve columns">
EOL;
                                // Go through each seat booked in this respective ticket and print them out
                                foreach($session->seats as $seatType => $quantity) {
                                    if ($quantity > 0) {
                                        $tempSeatType = getSeatType($seatType);
										$tempPrice = getPrice($session->time, $seatType) * $quantity;
										$tempPrice = number_format($tempPrice, 2, ".", "");
                                        echo $tempSeatType . " - " . $quantity . " = $" . $tempPrice . "<br>";
                                    }
                                }

								$price = number_format($price, 2, ".", "");
                        // After printing out all seats, display a 'remove' button as well as the total cost
                        // for the ticket
echo <<<EOL
                            </div>
                        </div>

                        <div class="row">
                            <div class="twelve columns">
                                <p>Total cost is: $$price</p>
                            </div>
                        </div>

                        <form action="removeticket.php" method="post">
                            <input type="hidden" name="date" value="$time">
                            <input type="hidden" name="movie" value="$movieCategory">

                            <input type="submit" value="Remove ticket">
                        </form>

                    </div>
EOL;
            }

            echo "</div>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once('head.php'); ?>
<body>
    <div class="container">
        <?php include_once('navbar.php'); ?>

        <?php if(!userHasTickets()) : ?>
            <div class="row ticket">
                <div class="twelve columns">
                    <h1 class="text-center">No items in your cart!</h1>
                </div>
            </div>
        <?php endif; ?>

        <?php generateTicket("AC"); ?>
        <?php generateTicket("CH"); ?>
        <?php generateTicket("AF"); ?>
        <?php generateTicket("RC"); ?>

        <?php calculateGrandTotal($_SESSION); ?>

        <?php if(userHasTickets()) : ?>
            <div class="row">
                <div class="six columns">
                    <a href="showing.php"><button class="button-primary">Continue booking tickets</button></a>
                </div>
                <div class="six columns">
                    <a href="checkout.php"><button class="button-primary">Check out</button></a>
                </div>
            </div>
        <?php endif; ?>
        <?php include_once("footer.php"); ?>
    </div>

</body>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</html>
