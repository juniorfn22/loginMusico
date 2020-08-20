
<nav id="sidebar" class="sidebar-wrapper">
<div class="sidebar-content">
  <div class="sidebar-brand">
  <?php 
    $naipe = $_SESSION['naipe'];
    $sql = "select nome from naipe where idnaipe ='.$naipe .'";
    $result = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_assoc($result)){
      $naipe = $row['nome'];
    }

  ?> 
    <a href="areaMaestro.php">Area do Maestro</a>

   
  </div>
  <div class="sidebar-header">
    
    <div class="user-info">
      <span class="user-name">
        <strong><?php echo $_SESSION['nome'];?></strong>
      </span>
      <span class="user-role"><?php echo $naipe?></span>
      
    </div>
  </div>
  <div class="sidebar-menu">
    <ul>
      <li class="header-menu ">
        <span>Menu</span>
      </li>
      <li>
      <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
            <a data-toggle="collapse" href="#collapse1">Cadastrar</a>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body ml-3"><a href="cadastroMusico.php">Musico</a></div>
            <div class="panel-footer ml-3"><a href="cadastroPartitura.php">Partitura</a></div>
            </div>
        </div>
        </div>
        </li> 
        <li>
      <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
            <a data-toggle="collapse" href="#collapse2">Hinos</a>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-footer ml-3"><a href="listarAvulsos.php">Avulsos</a></div>
            <div class="panel-footer ml-3"><a href="listarCantorCristao.php">Cantor Cristão</a></div>
            <div class="panel-footer ml-3"><a href="listarDobrados.php">Dobrados</a></div>
            <div class="panel-body ml-3"><a href="listarHarpa.php">Harpa Cristã</a></div>
            </div>
        </div>
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
          <i class="fa fa-folder"></i>
          <span>Examples</span>
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
    <span class="badge badge-pill badge-warning notification">3</span>
  </a>
  <a href="#">
    <i class="fa fa-envelope"></i>
    <span class="badge badge-pill badge-success notification">7</span>
  </a>
  <a href="#">
    <i class="fa fa-cog"></i>
    <span class="badge-sonar"></span>
  </a>


  <a href="logout.php">

    <i class="fa fa-power-off"></i>
  </a>
</div>
</nav>