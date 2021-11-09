<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($_SERVER['REQUEST_URI']=='/index.php') echo 'active'?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_SERVER['REQUEST_URI']=='/webprogramminge.php') echo 'active'?>" href="webprogramminge.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link <?php if ($_SERVER['REQUEST_URI']=='/graphicreport.php' || $_SERVER['REQUEST_URI']=='/tablereport.php') echo 'active'?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Report
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="graphicreport.php" class="dropdown-item">Graphic</a></li>
            <li><a href="tablereport.php" class="dropdown-item">Table</a></li>
            <!--<li><hr class="dropdown-divider"></li>-->
            <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <?php if( !isset ($_SESSION['login']) ): ?>
          <a href="login.php" class="btn btn-outline-success" type="submit">Login</a>
        <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: blue;">
              Hello, <?= $_SESSION['login'] ?>!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>
<div style="margin-top:5rem;">
</div>