<?php

/**
 * Base Controller
 * Load the models and views
 */

class Controller
{
  protected $postModel;
  // Load model
  public function model($model)
  {
    //Require model file
    require_once '../app/models/' . $model . '.php';

    // Instatiation $model
    return new $model();
  }


  //Load view
  public function view($view, $data = [])
  {
    // Check for view file
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    } else {
      // View does not exist
      // die func : stop the application
      die('View does not exist');
    }
  }


  public function __construct()
  {
  }
}