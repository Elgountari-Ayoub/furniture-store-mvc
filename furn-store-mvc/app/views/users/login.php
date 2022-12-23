<?php

require APPROOT . '/views/inc/header.php';

?>

<section>
  <div class="container" style="margin-top: 20rem; width: 50rem;">
    <form action="<?php echo URLROOT; ?>/users/login" method="post" class=" form-signin "
      style="display: flex; flex-direction: column; gap: 1rem;">

      <h1 class="h3 mb-3 fw-normal " style="margin: auto;">Sign in</h1>


      <label>Email:<sup>*</sup></label>
      <input type="text" name="email"
        class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
        value="<?php echo $data['email']; ?>">
      <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>



      <label>Password:<sup>*</sup></label>
      <input type="password" name="password"
        class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
        value="<?php echo $data['password']; ?>">
      <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>


      <button class="btn btn-lg btn-primary btn-block" style="width: 200px !important; margin: auto;" type="submit">Sign
        in</button>
      <p class="mt-5 mb-3 text-muted ">&copy; 2022-2023</p>
    </form>
  </div>
</section>

<?php
require APPROOT . '/views/inc/footer.php';

?>