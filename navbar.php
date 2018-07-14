<?php
  function calculatePrice($session) {
    $sum = 0;
    
    if ($session["AC"]) {
      foreach ($session["AC"] as $currentSession) {
        $sum += $currentSession->calculateTotal();
      }
    }
    
    if (isset($session["RC"])) {
      foreach ($session["RC"] as $currentSession) {
        $sum += $currentSession->calculateTotal();
      }
    }
    
    if (isset($session["CH"])) {
      foreach ($session["CH"] as $currentSession) {
        $sum += $currentSession->calculateTotal();
      }
    }
    
    if (isset($session["AF"])) {
      foreach ($session["AF"] as $currentSession) {
        $sum += $currentSession->calculateTotal();
      }
    }

    return "$" . number_format((float)$sum, 2, '.', '');
  }
?>

<div class="row navheader"><header class="four columns">
    <a href="index.php"><h1><strong>Haredale</strong></h1></a>
  </header>

  <div class="eight columns">
    <div class="row">
      <nav>
        <a href="cart.php">Cart (<?php echo calculatePrice($_SESSION) ?>)</a>
        <a href="showing.php#book">Book Tickets</a>
        <a href="showing.php">Now Showing</a>
        <a href="index.php">Home</a>
      </nav>
    </div>
    <div class="row">
      <i class="fa fa-search fa-2x u-pull-right"></i>
      <input class="u-pull-right" type="text">
    </div>
  </div>
</div>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>