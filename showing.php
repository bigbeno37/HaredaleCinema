<!DOCTYPE html>

<html>

<?php include_once('head.php'); ?>

<body>
  <div class="container">
    <?php include_once('navbar.php'); ?>

    <main>
      <h2>
        Now Showing
      </h2>

      <div>
        <div class="row" id="warplanet">
          <div class="four columns">
            <!-- War for the Planet of the Apes poster retrieved from
                 http://cdn3-www.superherohype.com/assets/uploads/gallery/war-for-the-planet-of-the-apes/apesposter.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FApes.jpg?1502862052093" alt="War for the Planet of the Apes">
            <!-- End reference -->
          </div>
          <div class="eight columns">
            <h4>
              War for the Planet of the Apes
            </h4>
            <h6>
              Director - Matt Reeves
            </h6>
            <div>
              <table>
                <tr>
                  <th colspan="2">Cast</th>
                </tr>
                <tr>
                  <td>Andy Serkis</td>
                  <td>Caesar</td>
                </tr>
                <tr>
                  <td>Woody Harrelson</td>
                  <td>The Colonel</td>
                </tr>
                <tr>
                  <td>Karin Konoval</td>
                  <td>Maurice</td>
                </tr>
              </table>

              <table>
                <tr>
                  <th colspan="2">Session Time</th>
                </tr>
                <tr>
                  <td>Wed - Fri</td>
                  <td>9PM</td>
                </tr>
                <tr>
                  <td>Sat - Sun</td>
                  <td>9PM</td>
                </tr>
              </table>
            </div>
            <br>

            <p>
              After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind.
            </p>
          </div>

        </div>
        <!-- Quick book; assumes one regular ticket for the current movie -->
        <form action="buyticket.php" method="post">
          <input type="hidden" name="movie" value="AC">

          <select name="session" required class="warplanet-qb">
            <option selected disabled>Session:</option>
          </select>

          <input type="hidden" name="seats[SF]" value="1">
          <input type="hidden" name="seats[SP]" value="0">
          <input type="hidden" name="seats[SC]" value="0">
          <input type="hidden" name="seats[FA]" value="0">
          <input type="hidden" name="seats[FC]" value="0">
          <input type="hidden" name="seats[BA]" value="0">
          <input type="hidden" name="seats[BF]" value="0">
          <input type="hidden" name="seats[BC]" value="0">

          <button type="submit" style="button" class="button-primary">
              Quick Book
          </button>
        </form>
      </div>

      <div>
        <div class="row" id="dunkirk">
          <div class="four columns">
            <!-- Dunkirk poster retrieved from
                 https://i0.wp.com/media2.slashfilm.com/slashfilm/wp/wp-content/images/dunkirk-poster.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FDunkirk.jpg?1502862057840" alt="Dunkirk">
            <!-- End reference -->
          </div>
          <div class="eight columns">
            <h4>
               Dunkirk
            </h4>
            <h6>
              Director - Christopher Nolan
            </h6>
            <div>
              <table>
                <tr>
                  <th colspan="2">Cast</th>
                </tr>
                <tr>
                  <td>Fionn Whitehead</td>
                  <td>Tommy</td>
                </tr>
                <tr>
                  <td>Aneurin Barnard</td>
                  <td>Gibson</td>
                </tr>
                <tr>
                  <td>Barry Keoghan</td>
                  <td>George</td>
                </tr>
              </table>

              <table>
                <tr>
                  <th colspan="2">Session Time</th>
                </tr>
                <tr>
                  <td>Mon - Tue</td>
                  <td>6PM</td>
                </tr>
                <tr>
                  <td>Sat - Sun</td>
                 <td>3PM</td>
                </tr>
              </table>
            </div>
            <br>

            <p>
              Allied soldiers from Belgium, the British Empire and France are surrounded by the German army and evacuated during a fierce battle in World War II.
            </p>
          </div>

        </div>
        <!-- Quick book; assumes one regular ticket for the current movie -->
        <form action="buyticket.php" method="post">
          <input type="hidden" name="movie" value="AF">

          <select name="session" required class="dunkirk-qb">
            <option selected disabled>Session:</option>
          </select>

          <input type="hidden" name="seats[SF]" value="1">
          <input type="hidden" name="seats[SP]" value="0">
          <input type="hidden" name="seats[SC]" value="0">
          <input type="hidden" name="seats[FA]" value="0">
          <input type="hidden" name="seats[FC]" value="0">
          <input type="hidden" name="seats[BA]" value="0">
          <input type="hidden" name="seats[BF]" value="0">
          <input type="hidden" name="seats[BC]" value="0">

          <button type="submit" style="button" class="button-primary">
              Quick Book
          </button>
        </form>
      </div>

      <div>
        <div class="row" id="emoji">
          <div class="four columns">
            <!-- The Emoji Movie poster retrieved from
                 https://i.pinimg.com/originals/3e/f6/0b/3ef60b7e4c4f342ec8ff3310fc57155c.jpg -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2FEmoji.jpg?1502862060157" alt="The Emoji Movie">
            <!-- End reference -->
          </div>
          <div class="eight columns">
            <h4>
              The Emoji Movie
            </h4>
            <h6>
              Director -  Tony Leondis
            </h6>
            <div>
              <table>
                <tr>
                  <th colspan="2">Cast</th>
                </tr>
                <tr>
                  <td>T.J. Miller</td>
                  <td>Gene (voice)</td>
                </tr>
                <tr>
                  <td>James Corden</td>
                  <td>Hi-5 (voice)</td>
                </tr>
                <tr>
                  <td>Anna Faris</td>
                  <td>Jailbreak (voice)</td>
                </tr>
              </table>

              <table>
                <tr>
                  <th colspan="2">Session Time</th>
                </tr>
                <tr>
                  <td>Mon - Tue</td>
                  <td>1PM</td>
                </tr>
                <tr>
                  <td>Wed - Fri</td>
                  <td>6PM</td>
                </tr>
                <tr>
                  <td>Sat - Sun</td>
                  <td>12PM</td>
                </tr>
              </table>
            </div>
            <br>

            <p>
              Gene, a multi-expressional emoji, sets out on a journey to become a normal emoji.
            </p>
          </div>
        </div>
      <!-- Quick book; assumes one regular ticket for the current movie -->
        <form action="buyticket.php" method="post">
          <input type="hidden" name="movie" value="CH">

          <select name="session" required class="emoji-qb">
            <option selected disabled>Session:</option>
          </select>

          <input type="hidden" name="seats[SF]" value="1">
          <input type="hidden" name="seats[SP]" value="0">
          <input type="hidden" name="seats[SC]" value="0">
          <input type="hidden" name="seats[FA]" value="0">
          <input type="hidden" name="seats[FC]" value="0">
          <input type="hidden" name="seats[BA]" value="0">
          <input type="hidden" name="seats[BF]" value="0">
          <input type="hidden" name="seats[BC]" value="0">

          <button type="submit" style="button" class="button-primary">
              Quick Book
          </button>
        </form>
      </div>

      <div>
        <div class="row" id="bigsick">
          <div class="four columns">
            <!-- The Big Sick poster retrieved from
                 https://pbs.twimg.com/media/DCNa3CHXcAEaP4I.jpg:large -->
            <img src="https://cdn.glitch.com/84bb949f-47ef-45f7-b716-ea4f2d41715e%2Fbigsick.jpeg?1504849828653" alt="The Big Sick">
            <!-- End reference -->
          </div>
          <div class="eight columns">
            <h4>
              The Big Sick
            </h4>
            <h6>
               Director - Michael Showalter
            </h6>
            <div>
              <table>
                <tr>
                  <th colspan="2">Cast</th>
                </tr>
                <tr>
                  <td>Kumail Nanjiani</td>
                  <td>Kumail</td>
                </tr>
                <tr>
                  <td>Zoe Kazan</td>
                  <td>Emily</td>
                </tr>
                <tr>
                  <td>Holly Hunter</td>
                  <td>Beth</td>
                </tr>
              </table>

              <table>
                <tr>
                  <th colspan="2">Session Time</th>
                </tr>
                <tr>
                  <td>Mon - Tue</td>
                  <td>9PM</td>
                </tr>
                <tr>
                  <td>Wed - Fri</td>
                  <td>1PM</td>
                </tr>
                <tr>
                  <td>Sat - Sun</td>
                  <td>6PM</td>
                </tr>
              </table>
            </div>
            <br>

            <p>
              Pakistan-born comedian Kumail Nanjiani and grad student Emily Gardner fall in love but struggle as their cultures clash. When Emily contracts a mysterious illness, Kumail finds himself forced to face her feisty parents, his family's expectations, and his true feelings.
            </p>
          </div>

        </div>
        <!-- Quick book; assumes one regular ticket for the current movie -->
        <form action="buyticket.php" method="post">
          <input type="hidden" name="movie" value="RC">

          <select name="session" required class="bigsick-qb">
            <option selected disabled>Session:</option>
          </select>

          <input type="hidden" name="seats[SF]" value="1">
          <input type="hidden" name="seats[SP]" value="0">
          <input type="hidden" name="seats[SC]" value="0">
          <input type="hidden" name="seats[FA]" value="0">
          <input type="hidden" name="seats[FC]" value="0">
          <input type="hidden" name="seats[BA]" value="0">
          <input type="hidden" name="seats[BF]" value="0">
          <input type="hidden" name="seats[BC]" value="0">

          <button type="submit" style="button" class="button-primary">
              Quick Book
          </button>
        </form>
      </div>





      <hr>

      <div class="row" id="book">
        <h1>
          Book Tickets
        </h1>

        <div class="twelve columns">
          <form action="buyticket.php" method="post">

            <select name="movie" required class="movie" onchange="clearSessions(); populateSessions(this.value)">
              <option selected disabled>Movie:</option>
              <option value="AC">War for the Planet of the Apes</option>
              <option value="RC">The Big Sick</option>
              <option value="CH">The Emoji Movie</option>
              <option value="AF">Dunkirk</option>
            </select>

            <select name="session" required class="session" onchange="updateSeatPrices(this.value)">
              <option selected disabled>Session:</option>
            </select>

            <fieldset>
              <fieldset>
                <legend>
                  <strong>Standard</strong>
                </legend>

                <label for="std-adult">Adult (<span class="sAdult"></span>)</label>
                <input id="std-adult" type="number" name="seats[SF]" min="0" max="10" value="0">

                <label for="std-con">Concession (<span class="sConcession"></span>)</label>
                <input id="std-con" type="number" name="seats[SP]" min="0" max="10" value="0">

                <label for="std-child">Child (<span class="sChild"></span>)</label>
                <input id="std-child" type="number" name="seats[SC]" min="0" max="10" value="0">
              </fieldset>

              <fieldset>
                <legend>
                  <strong>First Class</strong>
                </legend>

                <label for="fc-adult">Adult (<span class="fcAdult"></span>)</label>
                <input id="fc-adult" type="number" name="seats[FA]" min="0" max="10" value="0">

                <label for="fc-child">Child (<span class="fcChild"></span>)</label>
                <input id="fc-child" type="number" name="seats[FC]" min="0" max="10" value="0">
              </fieldset>

              <fieldset>
                <legend>
                  <strong>Beanbag</strong>
                </legend>

                <label for="b-adult">Adult (<span class="bbAdult"></span>)</label>
                <input id="b-adult" type="number" name="seats[BA]" min="0" max="10" value="0">

                <label for="b-family">Family (<span class="bbFamily"></span>)</label>
                <input id="b-family" type="number" name="seats[BF]" min="0" max="10" value="0">

                <label for="b-child">Child (<span class="bbChild"></span>)</label>
                <input id="b-child" type="number" name="seats[BC]" min="0" max="10" value="0">
              </fieldset>

            </fieldset>

            <button type="submit" style="button" class="button-primary">
              Book Tickets!
            </button>
          </form>
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
