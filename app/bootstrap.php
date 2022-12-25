<?php
  // including config file
  require_once '../app/config/config.php';  
  
  // autoLoader
  spl_autoload_register(function ($className) {
    require_once('libraries/' . $className . '.php');
  });