<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Bikcraft - <?php echo $arr['titulo']; ?></title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contato.css">
  <link rel="stylesheet" href="css/portfolio.css">
  <link rel="stylesheet" href="css/produtos.css">
  <link rel="stylesheet" href="css/sobre.css">
  <link rel="stylesheet" href="css/responsivo.css">
</head>

<body>

  <header class="header">
    <div class="container">
      <a href="<?php echo INCLUDE_PATH ?>" class="grid-4">
        <img src="img/bikcraft.svg" alt="Bikcraft">
      </a>
      <nav class="grid-12 header_menu">
        <ul>
          <?php foreach ($this->menuItens as $key => $value) { ?>
            <li>
              <a href="<?php echo INCLUDE_PATH . strtolower($value); ?>" class="<?php if (strtolower($value) == explode("/", $_SERVER["REQUEST_URI"])[2]) {
                                                                                  echo 'menu_ativo';
                                                                                } ?>"><?php echo $value; ?></a>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </header>