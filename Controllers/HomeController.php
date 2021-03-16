<?php

namespace Controllers;

class HomeController extends Controller
{

  function __construct()
  {
    $this->view = new \Views\MainView('home');
  }

  function executar()
  {
    $this->view->render(array('titulo' => 'Home'));
  }
}
