<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Template CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--
   Meta tags Obrigatórias 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 -->
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Clientes <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRUD PHP com Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
 
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <!-- Brand -->
          <div class="container">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php" class="navbar-brand">PROJECT</a>
 
            <!-- Links -->
            <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link 1</a>
          </li> -->
 
          <!-- Dropdown -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Eventos
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo BASEURL; ?>events">Gerenciar</a>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>events/add.php">Novo</a>
            </div>
        </li>
    </ul>
    <form class="form-inline" action="/search.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
</div>
</nav>
 
<main class="container">
 
 