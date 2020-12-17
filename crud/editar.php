<?php

  require_once 'vendor/autoload.php';

  $config = require_once 'config.php';
  $produtoDao = new \App\Model\ProdutoDao();

  include_once 'includes/header.php';
  include_once 'includes/edit.php';
  include_once 'includes/list.php';

  include_once 'includes/footer.php';