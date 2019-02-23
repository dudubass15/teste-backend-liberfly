<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/materialize.min.css"  media="screen,projection"/>
  <!--Import template.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/formulario_cadastro.css"  media="screen,projection"/>
    <!--Import template.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/animate.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <nav id="navbar">
    <div class="nav-wrapper">
      <a href="<?php echo URL; ?>/home" class="brand-logo">Liberfly</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo URL; ?>/passagem"><i class="material-icons left">arrow_back</i>Retornar</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo URL; ?>/passagem"><i class="material-icons left">arrow_back</i>Retornar</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <div class="row">
      <h3>Editar Reserva</h3>
      <br>
      <form class="col s12" method="POST">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" name="nome" value="<?php echo $list_passagens['nome_passageiro']; ?>" class="validate">
            <label for="icon_prefix">Nome</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment_ind</i>
            <input id="icon_telephone" type="text" name="cpf" value="<?php echo $list_passagens['cpf']; ?>" data-mask="000.000.000-00" class="validate">
            <label for="icon_telephone">CPF</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" type="tel" name="telefone" value="<?php echo $list_passagens['telefone']; ?>" data-mask="(00) 00000-0000" class="validate">
            <label for="icon_telephone">Telefone</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="icon_telephone" type="email" value="<?php echo $list_passagens['email']; ?>" name="email" class="validate">
            <label for="icon_telephone">email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">flight</i>
            <input id="icon_telephone" type="text" value="<?php echo $list_passagens['aeroporto_origem']; ?>" name="origem" class="validate">
            <label for="icon_telephone">Origem</label>
          </div>
          <div class="input-field col s4">
            <i class="material-icons prefix">flight_takeoff</i>
            <input id="icon_telephone" type="text" value="<?php echo $list_passagens['aeroporto_destino']; ?>" name="destino" class="validate">
            <label for="icon_telephone">Destino</label>
          </div>
          <div class="input-field col s4">
            <i class="material-icons prefix">confirmation_number</i>
            <input id="icon_telephone" type="text" value="<?php echo $list_passagens['numero_voo']; ?>" name="voo" class="validate">
            <label for="icon_telephone">Nº Voo</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">event_note</i>
            <input id="icon_telephone" type="text" value="<?php echo $list_passagens['data_ida']; ?>" name="data_ida" data-mask="00/00/0000" class="validate">
            <label for="icon_telephone">Data ida</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">event_note</i>
            <input id="icon_telephone" type="text" value="<?php echo $list_passagens['data_volta']; ?>" name="data_volta" data-mask="00/00/0000" class="validate">
            <label for="icon_telephone">Data volta</label>
          </div>
        </div>
        <div id="send-form">
          <button class="waves-effect waves-light btn" type="submit"><i class="material-icons left">add</i>Cadastrar</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted" id="rodapetext">Desenvolvido por Carlos Eduardo.</span>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/jquery.mask.js"></script>
</body>
</html>