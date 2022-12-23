<?php
class Pages extends Controller
{
  public function __construct()
  {
    // Load Models
    $this->ProductModel = $this->model('Product');
    $this->userModel = $this->model('User');
  }

  // Load Homepage
  public function index()
  {

    //Edited
    // If logged in, redirect to posts
    // if (isset($_SESSION['user_id'])) {
    //   redirect('products');
    // }

    //Set Data
    $data = [
      'title' => 'Welcome To SharePosts',
      'description' => 'Simple social network built on the TraversyMVC PHP framework'
    ];

    // Load homepage/index view
    $this->view('pages/index', $data);
  }

  public function about()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/about', $data);
  }
  public function newArrival()
  {
    $products = $this->ProductModel->getProducts();
    $data = [
      'Products' => $products
    ];
    $this->view('pages/newArrival', $data);
  }
  public function features()
  {
    $products = $this->ProductModel->getProducts();
    $data = [
      'Products' => $products
    ];
    $this->view('pages/features', $data);
  }
  public function blog()
  {
    $data = [
      'title' => 'Welcome To The Blog',
    ];
    $this->view('pages/blog', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'Welcome To The contact',
    ];
    $this->view('pages/contact', $data);
  }
  public function login()
  {
    $data = [
      'title' => 'Welcome To The Login',
    ];
    $this->view('pages/login', $data);
  }
}