<?php
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
    
    function outputToFile($reservation) {
        $movie = $_SESSION['cart'];
        $reservationFile = fopen("reservation.csv", "a");
        
        if (count($_SESSION[$reservation]) > 0) {
            $movie = $_SESSION[$reservation];
            $movieOutputInfo = array();
            array_push($movieOutputInfo, $_SESSION["name"]);
            array_push($movieOutputInfo, $_SESSION["email"]);
            array_push($movieOutputInfo, $_SESSION["phone"]);
            $movieName = toMovieTitle($reservation);
            array_push($movieOutputInfo, $movieName);
            $movieTime;
             
            foreach ($movie as $movieInfo) {
                $movieTime = getTime($movieInfo->time);
                array_push($movieOutputInfo, $movieTime);
                
                $movieClass;
                foreach($movieInfo->seats as $seatType => $quantity) {
                    if ($quantity > 0) {
                        $movieClass = getSeatType($seatType);
                        $moviePrice = getPrice($movieInfo->time, $seatType) * $quantity;
                        array_push($movieOutputInfo, $movieClass);
                        array_push($movieOutputInfo, $quantity);
                        array_push($movieOutputInfo, $moviePrice);
                    }
                }
                
            }

            fputcsv($reservationFile, $movieOutputInfo);
            
            fclose($reservationFile);
            unset($_SESSION[$reservation]);
        }
    }

?>

<!DOCTYPE HTML>
<html>
    <?php include_once('head.php'); ?>

    <body>
        <div class="container">
            <?php outputToFile("AC"); ?>
            <?php outputToFile("RC"); ?>
            <?php outputToFile("CH"); ?>
            <?php outputToFile("AF"); ?>
            <?php include_once('navbar.php'); ?>
           
            <p class="ticket">
                Thank you for booking. Hope you will have excellent cinema experience with us.<br>
                Reservation information have been stored.<br>
                One confirmation E-mail should be sent to email your provide.<br>
                Click <a href="index.php">here</a> to go back to the main page.
            </p>
            <?php include_once("footer.php"); ?>
        </div>
    </body>
</html>

<?php
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["phone"]);
?>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
