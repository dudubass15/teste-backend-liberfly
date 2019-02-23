<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/materialize.min.css"  media="screen,projection"/>
  <!--Import template.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/visualizar.css"  media="screen,projection"/>
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
    <?php foreach($passagens as $p): ?>
      <div class="row">
        <div class="col s12">
          <div class="card-panel teal">
            <span class="white-text"><h5>INFORMAÇÕES DA RESERVA</h5></span>
            <div class="divider"></div><br>
            <span class="white-text"><strong>Nome:</strong> <?php echo($p['nome_passageiro']); ?></span><br>
            <span class="white-text"><strong>CPF:</strong> <?php echo($p['cpf']); ?></span><br>
            <span class="white-text"><strong>Telefone:</strong> <?php echo($p['telefone']); ?></span><br>
            <span class="white-text"><strong>E-mail:</strong> <?php echo($p['email']); ?></span><br>
            <span class="white-text"><strong>Origem:</strong> <?php echo($p['aeroporto_origem']); ?></span><br>
            <span class="white-text"><strong>Destino:</strong> <?php echo($p['aeroporto_destino']); ?></span><br>
            <span class="white-text"><strong>Númeração do voo:</strong> <?php echo($p['numero_voo']); ?></span><br>
            <span class="white-text"><strong>Data de Ida:</strong> <?php echo($p['data_ida']); ?></span><br>
            <span class="white-text"><strong>Data de Vinda:</strong> <?php echo($p['data_volta']); ?></span><br>
            <span class="white-text"><strong>Criado em:</strong> <?php echo(date("d/m/Y H:i:s", strtotime($p['criado']))); ?></span><br>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted" id="rodapetext">Desenvolvido por Carlos Eduardo.</span>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/materialize.min.js"></script>
  <script type="text/javascript">
     $(".button-collapse").sideNav();
  </script>
</body>
</html>