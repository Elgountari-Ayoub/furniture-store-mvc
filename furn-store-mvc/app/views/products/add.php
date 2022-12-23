<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container" style="margin-top: 15rem;">
  <form class="member-form" action="<?php echo URLROOT; ?>/products/add" method="POST" enctype="multipart/form-data"
    style="padding: 0px 20rem;">

    <div class="form-group">
      <label for="chooseLogo">Product image</label>
      <br>
      <input requireds type="file" class="form-control-file" name="img">
    </div>
    <div class="form-group">
      <label for="full-name">Product title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="full-name">Product price</label>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
      <label for="full-name">Product Reviews Count</label>
      <input type="number" class="form-control" name="reviewsCount">
    </div>
    <div class="form-group">
      <label for="full-name">Product Stars Count</label>
      <input type="number" class="form-control" name="starsCount">
    </div>


    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>