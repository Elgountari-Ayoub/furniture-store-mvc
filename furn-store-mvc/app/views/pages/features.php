<?php

require APPROOT . '/views/inc/header.php';

?>
<!--sofa-collection start -->
<section class="features">
  <div class="container">
    <div class="left-side">
      <h2>N3s o nod merta7 m3a sedari YouCode</h2>
      <div>
        <img src="<?php echo URLROOT ?>/public/assets/images/features/Line.png" alt="" />
        <h3>Wa bali 9bl la yssali</h3>
      </div>
    </div>
    <div class="right-side">
      <img src="<?php echo URLROOT ?>/public/assets/images/features/orange-sofa.png" alt="yellow-sofa-image" />
    </div>
  </div>
</section>
<!--/.sofa-collection-->
<!--sofa-collection end -->

<!--feature start -->
<section id="feature" class="feature">
  <div class="container">
    <div class="section-header">
      <h2>featured products</h2>
    </div>
    <!--/.section-header-->
    <div class="feature-content">
      <div class="row">
        <?php foreach ($data['Products'] as $i => $product) : ?>
        <div class="col-sm-3">
          <div class="single-feature">
            <img style="max-height: 10rem;
            margin-left: auto;
            " src="<?php echo URLROOT . '/public/assets/images/' . $product->img ?>" alt=" feature image">
            <div class="single-feature-txt text-center">
              <p>

                <?php for ($i = 0; $i < $product->starsCount; $i++) : ?>
                <?php if ($i > 5) {
                      break;
                    } ?>
                <i class="fa fa-star"></i>
                <?php endfor; ?>

                <?php for ($i = 5; $i > $product->starsCount; $i--) : ?>
                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                <?php endfor; ?>
                <span class="feature-review">($<?php echo $product->reviewsCount ?> review)</span>
              </p>
              <h3><a href="#"><?php echo $product->title ?></a></h3>
              <h5>$<?php echo $product->price ?></h5>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<!--/.feature-->
<!--feature end -->


<?php
require APPROOT . '/views/inc/footer.php';

?>