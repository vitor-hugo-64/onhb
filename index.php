<?php
  
  require_once("vendor/autoload.php");

  use \Slim\App;
  use \ONHB\Page;

  $config = ['settings' => [ 'addContentLengthHeader' => false, ]];

  $app = new App($config);

  $app->get( '/', function ()
  {
    $name = 'Vitor Hugo';
    $page = new Page();
    $page->drawPage( [ 'header', 'index', 'footer']);
  });

  $app->run();