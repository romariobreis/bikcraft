<?php

namespace Controllers;

class ContatoController extends Controller
{

  function __construct()
  {
    $this->view = new \Views\MainView('contato');
  }

  function executar()
  {
    $this->view->render(array('titulo' => 'Contato'));
  }
}
