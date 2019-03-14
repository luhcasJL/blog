<?php include('elements/header.php'); ?>
<?php include('elements/sidebar.php'); ?>
<div class="container">
  <br>
  <div class="row">
    <div class="col-md-6" style="padding-left: 0;">
      <div class="col-md-12">
        <h3>Fale Conosco</h3>
      </div>
      <form action="index.php" method="post" name="sentMessage" id="contactForm" novalidate>
        <div class="form-group col-md-12 col-xs-12">
          <label for="name">Nome</label>
          <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Insira o campo nome.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Insira o campo email.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="phone">Celular</label>
          <input type="tel" class="form-control" placeholder="Celular" id="phone" required data-validation-required-message="Insira o campo telefone.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="message">Mensagem</label>
          <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Insira o campo  mensagem."></textarea>
          <p class="help-block text-danger"></p>
          <button type="submit" class="btn btn-success" style="float: right;">Enviar</button>
        </div>
        <div id="success"></div>
      </form>
    </div>

    <div class="col-md-6" style="padding-right: 0;">
      <div class="col-md-12">
        <h3>Trabalhe conosco</h3>
      </div>
      <form action="index.php" method="post" name="sentMessage" id="contactForm" novalidate>
        <div class="form-group col-md-12 col-xs-12">
          <label for="name">Nome</label>
          <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Insira o campo nome.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Insira o campo email.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="phone">Celular</label>
          <input type="tel" class="form-control" placeholder="Celular" id="phone" required data-validation-required-message="Insira o campo telefone.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group col-md-12 col-xs-12">
          <label for="message">Mensagem</label>
          <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Insira o campo  mensagem."></textarea>
          <p class="help-block text-danger"></p>
          <button type="submit" class="btn btn-success" style="float: right;">Enviar</button>
        </div>
        <div id="success"></div>
      </form>
    </div>
  </div>
</div>
<?php include('elements/footer.php'); ?>
