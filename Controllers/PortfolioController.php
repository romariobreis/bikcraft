<?php

namespace Controllers;

class PortfolioController extends Controller
{

  function __construct()
  {
    $this->view = new \Views\MainView('portfolio');
  }

  function executar()
  {
    $this->view->render(array('titulo' => 'Portfolio'));
  }
}
