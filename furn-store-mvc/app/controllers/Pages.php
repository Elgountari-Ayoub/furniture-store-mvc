<?php
class Pages extends Controller
{

  public function __construct()
  {
    // echo 'Pages Loaded';
  }

  public function index()
  {
    $data = [
      'title' => 'Welcome To The Furniture Store',
    ];
    $this->view('pages/index', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About'
    ];
    $this->view('pages/about', $data);
  }

  public function newArrival()
  {
    $data = [
      'title' => 'Welcome To The New Arrivals',
    ];
    $this->view('pages/newArrival', $data);
  }
  public function features()
  {
    $data = [
      'title' => 'Welcome To The Features',
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
