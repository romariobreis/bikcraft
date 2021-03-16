<?php

namespace Controllers;

class ProdutosController extends Controller
{

  function __construct()
  {
    $this->view = new \Views\MainView('produtos');
  }

  function executar()
  {
    $this->view->render(array('titulo' => 'Produtos'));
  }
}
