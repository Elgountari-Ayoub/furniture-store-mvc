<?php require APPROOT . '/views/inc/header.php'; ?>
<div style="display: none;">
  <a href="<?php echo URLROOT; ?>" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>
  <h1><?php echo $data['post']->title; ?></h1>
  <div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
  </div>
  <p><?php echo $data['post']->body; ?></p>
  <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <input type="submit" class="btn btn-danger" value="Delete">
  </form>
  <?php endif; ?>
</div>

<!-- 
       /
      /
     /\  /   
    /  \/
   /    \  /
--/      \/
 -->

<?php $product = $data['Product'] ?>
<div class="container" style="margin-top: 15rem;">
  <form class="member-form" action="<?php echo URLROOT; ?>/products/edit/<?php echo $product->id; ?>" method="POST"
    enctype="multipart/form-data" style="padding: 0px 20rem;">

    <div class="form-group">
      <label for="chooseLogo">Product image</label>
      <br>
      <input requireds type="file" class="form-control-file" name="img">
    </div>
    <div class="form-group">
      <label for="full-name">Product title</label>
      <input value=" <?php echo $product->title ?>" type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="full-name">Product price</label>
      <input value=" <?php echo $product->price ?>" type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
      <label for="full-name">Product Reviews Count</label>
      <input value="<?php echo $product->reviewsCount ?>" type="number" class="form-control" name="reviewsCount">
    </div>
    <div class="form-group">
      <label for="full-name">Product Stars Count</label>
      <input value="<?php echo $product->starsCount ?>" type="number" class="form-control" name="starsCount">
    </div>

    <button type="submit" class="btn btn-primary">
      Save
    </button>
  </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>