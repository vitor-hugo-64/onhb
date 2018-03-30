<?php
  
  require_once("vendor/autoload.php");

  use \Slim\App;
  use \ONHB\Page;
  use \ONHB\Model\User;

  $config = ['settings' => [ 'addContentLengthHeader' => false, ]];

  $app = new App($config);

  $_POST['status'] = null;

  $app->get( '/[{status}]', function ()
  {
    $page = new Page();
    $page->drawPage( [ 'header', 'index', 'footer']);
  });

  $app->post( '/cadastrar', function ()
  {
    $user = new User();
    $params = [ ':NOME' => $_POST['nome'], ':TURMA' => $_POST['turma'], ':EMAIL' => $_POST['email'], ':NOME_DO_GRUPO' => $_POST['nome-grupo'] ];
    $result = $user->cadastrar($params);
    header("Location: /".$result);
    exit;
  });

  $app->run();