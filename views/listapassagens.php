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
        <li><a href="<?php echo URL; ?>/home"><i class="material-icons left">arrow_back</i>Retornar</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo URL; ?>/home"><i class="material-icons left">arrow_back</i>Retornar</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      <h3>Todas as Reservas</h3>
      <br>
      <table class="responsive-table bordered highlight centered">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Origem</th>
              <th>Destino</th>
              <th>Data de Ida</th>
              <th>Data de Vinda</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($passagens as $p): ?>
          <tr>
            <td><?php echo($p['nome_passageiro']); ?></td>
            <td><?php echo($p['telefone']); ?></td>
            <td><?php echo($p['aeroporto_origem']); ?></td>
            <td><?php echo($p['aeroporto_destino']); ?></td>
            <td><?php echo($p['data_ida']); ?></td>
            <td><?php echo($p['data_volta']); ?></td>
            <td>
              <a href="<?php echo URL; ?>/passagem/visualizar/<?php echo $p['id']; ?>" class="btn-floating btn-Tiny waves-effect waves-light red">
                <i class="material-icons">pageview</i>
              </a>
              <a href="<?php echo URL; ?>/passagem/editar/<?php echo $p['id']; ?>" class="btn-floating btn-Tiny waves-effect waves-light red">
                <i class="material-icons">edit</i>
              </a>
              <a href="<?php echo URL; ?>/passagem/deletar/<?php echo $p['id']; ?>" class="btn-floating btn-Tiny waves-effect waves-light red">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
  </div>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted" id="rodapetext">Desenvolvido por Carlos Eduardo.</span>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/materialize.min.js"></script>
</body>
</html>