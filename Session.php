<?php
    // Determine if the current time '$time' is eligible for the discounted pricing
    // Discounted pricing is available on MON or TUE, OR WED, THU, and FRI if the movie
    // is being shown at 01
    function isAlternatePrice($time) {
        if (strpos($time, 'MON') !== false || strpos($time, 'TUE') !== false
                || strpos($time, '01' !== false)) {
            return true;            
        }
    }

    // Get the price of a specified seat based on the time.
    function getPrice($time, $seat) {
        if ($seat === "SF") {
            if (isAlternatePrice($time)) {
                return 12.50;
            }
            
            return 18.50;
        } else if ($seat === "SP") {
            if (isAlternatePrice($time)) {
                return 10.50;
            }
            
            return 15.50;
        } else if ($seat === "SC") {
            if (isAlternatePrice($time)) {
                return 8.50;
            }
            
            return 12.50;
        } else if ($seat === "FA") {
            if (isAlternatePrice($time)) {
                return 25.0;
            }
            
            return 30.0;
        } else if($seat === "FC") {
            if (isAlternatePrice($time)) {
                return 20.0;
            }
            
            return 25.0;
        } else if($seat === "BA") {
            if  (isAlternatePrice($time)) {
                return 22.0;
            }
            
            return 33.0;
        } else if($seat === "BF") {
            if (isAlternatePrice($time)) {
                return 20.0;
            }
            
            return 30.0;
        } else if ($seat === "BC") {
            if (isAlternatePrice($time)) {
                return 20.0;
            }
            
            return 30.0;
        }
    }
    
    // The class that houses each individual ticket a user can buy. Each ticket will hold a time,
    // an array of seats (just strings containing seat codes eg. BA), and has a function able to
    // calculate the total cost of this individual ticket
    class Session {
        public $time;
        public $seats;
        
        public function calculateTotal() {
            $sum = 0;
            
            foreach($this->seats as $seat => $amount) {
                $sum += ($amount > 0) ? getPrice($this->time, $seat) * $amount : 0;
            }
            
            return $sum;
        }
    }
?>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
