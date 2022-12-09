<?php

require APPROOT . '/views/inc/header.php';

?>

<section>
  <div class="container" style="margin-top: 20rem; width: 50rem;">
    <form class=" form-signin " style="display: flex; flex-direction: column; gap: 1rem;">
      <h1 class="h3 mb-3 fw-normal " style="margin: auto;">Sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" style="width: 200px !important; margin: auto;" type="submit">Sign
        in</button>
      <p class="mt-5 mb-3 text-muted ">&copy; 2022-2023</p>
    </form>
  </div>
</section>

<?php
require APPROOT . '/views/inc/footer.php';

?>