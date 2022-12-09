<?php
/*
  * App Core Class
  * Create URL & Load core controller
  * URL FORMAT  -   /controller/methods/params
  */

class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];


  public function __construct()
  {
    $url = $this->getURL();

    // print_r($url);
    //Look in controllers for first value
    if (isset($url[0])) {
      if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
        //If exists, set as controller
        $this->currentController = ucwords($url[0]);
        //unset 0 Index
        unset($url[0]);
      }
    }
    //Require the controller
    require_once '../app/controllers/' . $this->currentController . '.php';

    //Instantiate controller class
    $this->currentController = new $this->currentController;

    //check the 2nd part of the url
    if (isset($url[1])) {
      // check if method exist in controller
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        // Unset 1 index 
        unset($url[1]);
      }
    }

    // if (count($this->params) > 0) {
    //get params
    $this->params = $url ? array_values($url) : [];
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    // }
  }

  public function getURL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}