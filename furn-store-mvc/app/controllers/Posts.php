<?php
class Posts
{
  public function __construct()
  {
    // echo 'Posts Loaded' . '<br>';
  }

  public function index()
  {
    // echo 'index' . '<br>';
  }
  public function about($id)
  {
    echo 'about' . '<br>';
    echo $id . '<br>';
  }
}