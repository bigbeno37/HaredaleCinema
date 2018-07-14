<?php

    function getTotal($movie) {
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

        return $grandTotal;
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

    function getTime($time) {
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

    function generateReceipt($ticket) {
        if (count($_SESSION[$ticket]) > 0) {
            $name = $_POST["name"];
            $_SESSION['name'] = $name;

            $phone = $_POST["phone"];
            $_SESSION['phone'] = $phone;

            $email = $_POST["email"];
            $_SESSION['email'] = $email;

            $movie = $_SESSION[$ticket];
            $movieName = toMovieTitle($ticket);
            foreach ($movie as $movieInfo) {
                $movieTime = getTime($movieInfo->time);
                $totalPrice = $movieInfo->calculateTotal();
                $totalPrice = number_format($totalPrice, 2, ".", "");

echo <<<EOL
            <div class="left-float">
                <p>
                    $name <br>
                    $email <br>
                    $phone <br>
EOL;
                $ticketClass;
                foreach($movieInfo->seats as $seatType => $quantity) {
                    if ($quantity > 0) {
                        $ticketClass = getSeatType($seatType);
                        echo $quantity . " * " . $ticketClass . "<br>";
                    }
                }
echo <<<EOL
                </p>
                <!-- image for educational usage -->
                 <img src="https://lh3.googleusercontent.com/JhlUkFmf_qYUMEV_H-WPvG_TMB7oiSY8jqqRIkzJ_cZRe0eWYIx_x59NPMX-gMpUSRZN=w170"
                 alt="QR code" height="80" width="80">
            </div>
EOL;

echo <<<EOL
            <div class="right-float">
                <p>
                    Haredale <br>
                    $movieName <br>
                    $movieTime <br>
EOL;

                foreach($movieInfo->seats as $seatType => $quantity) {
                    if ($quantity > 0) {
                        $ticketPrice = getPrice($movieInfo->time, $seatType) * $quantity;
                        $ticketPrice = number_format($ticketPrice, 2, ".", "");
                        echo "$" . $ticketPrice . "<br>";
                    }
                }
echo <<<EOL
                </p>
            </div>
            <p class="reset-float right-float">Total Price: $$totalPrice</p>
EOL;
                foreach($movieInfo->seats as $seatType => $quantity) {
                    if ($quantity > 0) {
                        $ticketSeat = getSeatType($seatType);
echo <<<EOL
            <p class="reset-float"><hr class="dotted"></p>
            <div class="left-float">
                <p>
                    Haredale<br>
                    $movieTime<br>
                    $movieName<br>
                    $ticketSeat<br>
                </p>
            </div>
EOL;
                    }
                }
echo <<<EOL
            <p class="reset-float"><hr class="solid"></p>
EOL;
            }
        }
    }
?>

<!DOCTYPE HTML>
<html lang="en">
    <?php include_once('head.php'); ?>

<body>
    <div class="container">
        <?php include_once('navbar.php'); ?>

        <div class="row">
            <div class="seven columns confirmTicket">
                <?php generateReceipt("AC"); ?><br>
                <?php generateReceipt("RC"); ?><br>
                <?php generateReceipt("CH"); ?><br>
                <?php generateReceipt("AF"); ?><br>
            </div>
        </div>

        <div class="row">
            <div class="seven columns">
                <a href="output.php" class="left-float">
                    <button class="button-primary">Confrim</button>
                </a>

                <a href="showing.php" class="right-float">
                    <button class="button-primary">Continue Booking</button>
                </a>
            </div>
        </div>

        <?php include_once("footer.php"); ?>

    </div>

</body>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</html>
