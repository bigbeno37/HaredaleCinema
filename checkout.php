<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('head.php'); ?>

</head>
<body>
    <div class="container">
        <?php include_once('navbar.php'); ?>
        <div class="row">
            <div class="twelve columns">
                <form action="confirmtickets.php" method="POST" id="confirmBooking">
                    <!-- Work your magic box -->
                    <p>Name: </p>
                    <input type="text" name="name" onkeyup="nameCheck()" id="nameInput" placeholder="name"
                    pattern="[a-zA-z '-]+$" title="only letter, ' and space allowed"
                    value="<?php echo $_SESSION['name']?>" required>

                    <p>Email: </p>
                    <input type="text" name="email" onkeyup="emailCheck()" id="emailInput" placeholder="example@example.com"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@example.com"
                    value="<?php echo $_SESSION['email']?>" required>

                    <p>Phone: </p>
                    <input type="text" name="phone" onkeyup="phoneCheck()" id="phoneInput" placeholder="0412123123"
                    pattern="(\+(61)(?=4\d{2}))?(0?4\d{2}\s?\d{3}\s?\d{3})$" title="please enter an Australian phone number"
                    value="<?php echo $_SESSION['phone']?>" required>
                    <br>
                    <input type="submit" value="Purchase tickets" class="button-primary">
                </form>
            </div>
        </div>
        <?php include_once("footer.php");?>
    </div>

</body>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</html>
