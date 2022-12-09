<?php

require APPROOT . '/views/inc/header.php';

?>

<section class="contact">
  <div class="container">
    <div class="left-side">
      <img src="<?php echo URLROOT ?>/public/assets/images/contact/furn-team-image.png" alt="" />
    </div>
    <div class="right-side">
      <form action="">
        <div class="two-cols">
          <div>
            <label for="name">Full name</label>
            <input type="text" id="name" placeholder="Elgountari Ayoub" />
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="elgountariayoub22@gmail.com" />
          </div>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea placeholder="Something I really appreciate about you is your aptitude for problem-solving." name="message" id="message" cols="30" rows="10" maxlength="100"></textarea>
        </div>
        <input class="submit" type="submit" value="Send" />
      </form>
    </div>
  </div>
</section>

<?php
require APPROOT . '/views/inc/footer.php';

?>