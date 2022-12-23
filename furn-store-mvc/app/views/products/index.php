<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container" style="margin-top: 15rem;">


  <a href="<?php echo URLROOT; ?>/products/add"><button class="btn btn-success">Add Product</button></a>

  <!-- <img src="/app/views/products/download/backy.png" alt="IMAGE"> -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">ReviewsCount</th>
        <th scope="col">StarsCount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>


      <?php foreach ($data['Products'] as $i => $product) : ?>
        <tr>
          <!-- <form class="club-row" action=""> -->
          <th scope="row"><?php echo $i + 1 ?></th>

          <!-- <td class="logo"><img src="<?php //echo URLROOT . '/app/views/products/' . $product->img 
                                          ?>" alt="products image"> -->
          <!-- <td class="logo"><img src="<?php //echo $product->img 
                                          ?>" alt="products image"> -->
          <td class="logo" style="width: 1%;height:1%">
            <img src="<?php echo URLROOT . '/public/assets/images/' . $product->img
                      ?>" alt=" products image">
            <!-- <img src="<?php //echo URLROOT . '/app/views/products/' . $product->img 
                            ?>" alt=" products image"> -->

          </td>
          <td class="title"><?php echo $product->title ?></td>
          <td class="creationDate"><?php echo $product->price ?></td>
          <td class="description" title="<?php echo $product->ReviewsCount ?>">
            <?php echo $product->reviewsCount ?>
          </td>
          <td class="members">
            <?php echo $product->starsCount ?>
          </td>
          <td class="action">

            <a href="<?php echo URLROOT; ?>/products/show/<?php echo $product->id; ?>">
              <button class="btn btn-primary">Edit</button>
            </a>

            <a href="<?php echo URLROOT; ?>/products/delete/<?php echo $product->id; ?>">
              <button class="btn btn-danger">Delete</button>
            </a>

          </td>
          <!-- <td class="action"><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td> -->
          <!-- </form> -->
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>