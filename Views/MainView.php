<?php

namespace Views;

class MainView
{
  private $filename;
  private $header;
  private $footer;
  public $menuItens = array('Sobre', 'Produtos', 'Portfolio', 'Contato');

  function __construct($filename, $header = 'header', $footer = 'footer')
  {
    $this->filename = $filename;
    $this->header = $header;
    $this->footer = $footer;
  }

  function render($arr = [])
  {
    include('pages/templates/' . $this->header . '.php');
    include('pages/' . $this->filename . '.php');
    include('pages/templates/' . $this->footer . '.php');
  }
}
