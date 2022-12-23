<?php
class Products extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION['user_id'])) {
      redirect('users/login');
    }

    // Load Models
    $this->ProductModel = $this->model('Product');
    $this->userModel = $this->model('User');
  }

  // Load All Products
  public function index()
  {
    $products = $this->ProductModel->getProducts();
    $data = [
      'Products' => $products
    ];
    $this->view('products/index', $data);
  }

  // Show Single Product
  public function show($id)
  {
    $Product = $this->ProductModel->getProductById($id);
    $user = $this->userModel->getUserById($Product->id);

    $data = [
      'Product' => $Product,
      'user' => $user
    ];


    $this->view('products/show', $data);
  }

  // Add Product
  public function add()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize Product
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'user_id' => $_SESSION['user_id'],
        'img' => ($_FILES['img']),
        'title' => trim($_POST['title']),
        'price' => floatval($_POST['price']),
        'reviewsCount' => intval($_POST['reviewsCount']),
        'starsCount' => intval($_POST['starsCount']),

        'img_err' => '',
        'title_err' => '',
        'price_err' => '',
        'reviewsCount_err' => '',
        'starsCount_err' => '',
      ];
      if (empty($data['img'])) {
        $data['img_err'] = 'Please enter the Product image';
      }
      // Validate name
      if (empty($data['title'])) {
        $data['title_err'] = 'Please enter the Product title';
      }
      if (empty($data['price'])) {
        $data['price_err'] = 'Please enter the Product price';
      }
      // Validate name
      if (empty($data['reviewsCount'])) {
        $data['reviewsCount_err'] = 'Please enter the Product reviews Count';
      }
      // Validate name
      if (empty($data['starsCount'])) {
        $data['starsCount_err'] = 'Please enter the Product stars Count';
      }

      // Make sure there are no errors
      if (
        empty($data['img_err']) &&
        empty($data['title_err']) &&
        empty($data['price_err']) &&
        empty($data['reviewsCount_err']) &&
        empty($data['starsCount_err'])
      ) {
        $imgPath =  'productImages/' . $data["img"]["name"];

        move_uploaded_file($data["img"]["tmp_name"], APP . '/public/assets/images/' . $imgPath);
        $data['img'] = $imgPath;

        // Validation passed
        //Execute
        if ($this->ProductModel->addProduct($data)) {
          // Redirect to login
          flash('Product_added', 'Product Added');
          redirect('Products');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('products/add', $data);
      }
    } else {

      $data = [
        'title' => '',
        'body' => '',
      ];
      $this->view('products/add', $data);
    }
  }

  // Edit Product
  public function edit($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize Product
      // die('error');

      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        // 'user_id' => $_SESSION['user_id'],
        'id' => $id,
        'img' => ($_FILES['img']),
        'title' => trim($_POST['title']),
        'price' => floatval($_POST['price']),
        'reviewsCount' => intval($_POST['reviewsCount']),
        'starsCount' => intval($_POST['starsCount']),

        'img_err' => '',
        'title_err' => '',
        'price_err' => '',
        'reviewsCount_err' => '',
        'starsCount_err' => '',
      ];
      if (empty($data['img'])) {
        $data['img_err'] = 'Please enter the Product image';
      }
      // Validate name
      if (empty($data['title'])) {
        $data['title_err'] = 'Please enter the Product title';
      }
      if (empty($data['price'])) {
        $data['price_err'] = 'Please enter the Product price';
      }
      // Validate name
      if (empty($data['reviewsCount'])) {
        $data['reviewsCount_err'] = 'Please enter the Product reviews Count';
      }
      // Validate name
      if (empty($data['starsCount'])) {
        $data['starsCount_err'] = 'Please enter the Product stars Count';
      }

      // Make sure there are no errors
      if (
        empty($data['img_err']) &&
        empty($data['title_err']) &&
        empty($data['price_err']) &&
        empty($data['reviewsCount_err']) &&
        empty($data['starsCount_err'])
      ) {
        $imgPath =  'productImages/' . $data["img"]["name"];

        move_uploaded_file($data["img"]["tmp_name"], APP . '/public/assets/images/' . $imgPath);
        $data['img'] = $imgPath;

        // Validation passed
        //Execute
        if ($this->ProductModel->updateProduct($data)) {
          // Redirect to login
          flash('Product_message', 'Product Updated');
          redirect('Products');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('products/edit', $data);
      }
    } else {
      // Get Product from model
      $Product = $this->ProductModel->getProductById($id);

      // Check for owner
      if ($Product->id != $_SESSION['user_id']) {
        redirect('Products');
      }

      $data = [
        'id' => $id,
        'title' => $Product->title,
        'body' => $Product->body,
      ];

      $this->view('products/edit', $data);
    }
  }

  // Delete Product
  public function delete($id)
  {
    // die($_SERVER['REQUEST_METHOD']);
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      //Execute
      if ($this->ProductModel->deleteProduct($id)) {
        // Redirect to login
        flash('Product_message', 'Product Removed');
        redirect('Products');
      } else {
        die('Something went wrong');
      }
    } else {
      redirect('Products');
    }
  }
}