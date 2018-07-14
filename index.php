<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>
  <div class="container">
    <?php include_once('navbar.php'); ?>

    <main>
      <div class="row u-cf movies">
        <div class="movie-left three columns">
          <a href="showing.php#warplanet">
            <!-- War for the Planet of the Apes poster retrieved from
                 http://cdn3-www.superherohype.com/assets/uploads/gallery/war-for-the-planet-of-the-apes/apesposter.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FApes.jpg?1502862052093" alt="" class="u-full-width">
            <!-- End reference -->
          </a>
        </div>
        <div class="three columns">
          <a href="showing.php#dunkirk">
            <!-- Dunkirk poster retrieved from
                 https://i0.wp.com/media2.slashfilm.com/slashfilm/wp/wp-content/images/dunkirk-poster.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FDunkirk.jpg?1502862057840" alt="" class="u-full-width">
            <!-- End reference -->
          </a>
        </div>
        <div class="three columns">
          <a href="showing.php#emoji">
            <!-- The Emoji Movie poster retrieved from
                 https://i.pinimg.com/originals/3e/f6/0b/3ef60b7e4c4f342ec8ff3310fc57155c.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FEmoji.jpg?1502862060157" alt="" class="u-full-width">
            <!-- End reference -->
          </a>
        </div>
        <div class="movie-right three columns">
          <a href="showing.php#bigsick">
            <!-- The Big Sick poster retrieved from
                 https://pbs.twimg.com/media/DCNa3CHXcAEaP4I.jpg:large -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2Fbigsick.jpeg?1504849828653" alt="" class="u-full-width">
            <!-- End reference -->
          </a>
        </div>
      </div>

      <div class="row reopening">
        <div class="twelve columns">
          <h2>Haredale Reopening!</h2>
          <p>After countless weeks of preparing our luxurious theatre rooms with the latest in video and audio design, Haredale Cinemas are proud to announce that we are reopening! Come on down to experience the marvels of Dolby audio and the latest in projector based technologies to immerse yourself in the movies you watch!</p>
          <div class="clear">
            <p>
              <h4><strong>1. New seats will be launched with super comfortable Bean Bags!</strong></h4>
            </p>
            <!-- original image and adapted for educational purpose:
                 Silverado Floor Plan
                 https://titan.csit.rmit.edu.au/~s3272974/wp/a2/img/floorplan.png -->
            <p><img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2Ffloorplan.png?1504912022993" alt="" class="reopeningImg">With the super comfortable Bean Bag, you have some a super awesome experience. It can make you feel extremely relax from working!</p>
            <!-- End reference -->
          </div>

          <div class="clear">
            <p>
              <h4><strong>2. New Dolby Audio Launched!</strong></h4>
            </p>
            <p>
              <!-- original video and adapted for educational purpose:
                   https://www.youtube.com/watch?v=Tj4PQ4mAVy8 -->
              <iframe width="420" height="315" src="https://www.youtube.com/embed/Tj4PQ4mAVy8?autoplay=0">
              </iframe>
              <!-- End reference -->
              When the lights go out, experience another world where <strong>NOTHING ELSE</strong> matters!
              <br>
              Experience the most powerful sound and vision technologies in a cinema designed to move you deep into the story.
            </p>
          </div>
        </div>
      </div>

      <div class="row pricing">
        <div class="twelve columns">
          <table class="u-full-width">
            <thead>
              <tr>
                <th>Seat</th>
                <th>Type</th>
                <th>Price<br>Mon - Tue all day<br>Monday - Friday 1PM only</th>
                <th>Price (All other times)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td rowspan="3">Standard</td>
                <td>Adult</td>
                <td>$12.50</td>
                <td>$18.50</td>
              </tr>
              <tr>
                <td>Concession</td>
                <td>$10.50</td>
                <td>$15.50</td>
              </tr>
              <tr>
                <td>Child</td>
                <td>$8.50</td>
                <td>$12.50</td>
              </tr>
              <tr>
                <td rowspan="2">First Class</td>
                <td>Adult</td>
                <td>$25</td>
                <td>$30</td>
              </tr>
              <tr>
                <td>Child</td>
                <td>$20</td>
                <td>$25</td>
              </tr>
              <tr>
                <td rowspan="3">Beanbag</td>
                <td>Adult</td>
                <td>$22</td>
                <td>$33</td>
              </tr>
              <tr>
                <td>Family</td>
                <td>$20</td>
                <td>$30</td>
              </tr>
              <tr>
                <td>Child</td>
                <td>$20</td>
                <td>$30</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <?php include_once('footer.php'); ?>

  </div>


  <script src="js/classes.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>
</body>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</html>
