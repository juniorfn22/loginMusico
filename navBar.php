<!-- <script src="javascript.js"></script>
<nav id="sidebar" class="sidebar-wrapper">
<div class="sidebar-content">
  <div class="sidebar-brand"> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
    </script>
    <script src="javascript.js"></script>
  <?php 
    $naipe = $_SESSION['naipe'];
    $sql = "select nome from naipe where idnaipe ='.$naipe .'";
    $result = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_assoc($result)){
      $naipe = $row['nome'];
    }

  ?> 

    <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="areaMaestro.php">Area do Maestro</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo $_SESSION['nome']?>
          </span>
          <span class="user-role"><?php echo $naipe?></span>
          <!-- <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span> -->
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Cadastrar</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="cadastroMusico.php">Músico</a>
                </li>
                <li>
                  <a href="cadastroPartitura.php">Partitura</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Acervo</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="listarAvulsos.php">Avulsos
                  </a>
                </li>
                <li>
                  <a href="listarCantorCristao.php">Cantor Cristão</a>
                </li>
                <li>
                  <a href="listarDobrados.php">Dobrados</a>
                </li>
                <li>
                  <a href="listarHarpa.php">Harpa Cristã</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Agenda</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Regimento</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-exclamation-triangle"></i>
              <span>Avisos</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
      </a>
      <a href="logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
</script>