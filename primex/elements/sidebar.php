<?php $paginaCorrente = basename($_SERVER['REQUEST_URI']);?>
<header>
<!-- Barra de navegação -->
<nav class="navbar navbar-fixed-top navbar-light bg-light container navheader">
  <img src="assets/img/logo.png" alt="logotipo Primex" id="logotipo" class="navbar-brand">
  <button class="navbar-toggler hidden-md-up float-sm-right float-xs-right" type="button" data-toggle="collapse" data-target="#menu-sanduiche"></button>
  <div class="collapse navbar-toggleable-sm" id="menu-sanduiche">
    <ul class="nav navbar-nav float-md-right">
      <li  <?php if($paginaCorrente != 'about' && $paginaCorrente != 'services' && $paginaCorrente != 'blog' && $paginaCorrente != 'contact') {echo 'class="nav-item corrente"';}else{echo 'class="nav-item"';} ?>>
        <br class="hidden-sm-up">
        <a href="home" class="nav-link">Home</a>
      </li>
      <li class="nav-item" <?php if($paginaCorrente == 'about') {echo 'class="nav-item"';}else{echo 'class="nav-item"';} ?>>
        <a href="about" class="nav-link">About</a>
      </li>
      <li class="nav-item" <?php if($paginaCorrente == 'services') {echo 'class="nav-item"';}else{echo 'class="nav-item"';} ?>>
        <a href="services" class="nav-link">Services</a>
      </li>
      <li class="nav-item" <?php if($paginaCorrente == 'blog') {echo 'class="nav-item"';}else{echo 'class="nav-item"';} ?>>
        <a href="blog" class="nav-link">Blog</a>
      </li>
      <li class="nav-item" <?php if($paginaCorrente == 'contact') {echo 'class="nav-item"';}else{echo 'class="nav-item"';} ?>>
        <a href="contact" class="nav-link">Contacts</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Fim - Barra de navegação -->
</header>
