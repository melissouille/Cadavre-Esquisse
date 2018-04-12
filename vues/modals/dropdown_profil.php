<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<ul id="dropdown_profil" class="nav navbar-nav">
  <li class="boutons dropdown">
    <a href="profil.php" class="dropdown-toggle" data-toggle="dropdown">
      <?php echo $_SESSION['user'] ;?>
      <span class="glyphicon glyphicon-user pull-right"></span>
    </a>

    <ul class="dropdown-menu">
      <li>
        <a href="notifications.php">Notifications<span class="badge pull-right">NB</span></a>
      </li>
      <li>
        <a href="bandedessinees.php">Les BD<span class="glyphicon glyphicon-stats pull-right"></span></a>
      </li>
      <li>
        <a href="cases.php">Les Cases</a><span class="glyphicon glyphicon-cog pull-right"></span></a>
      </li>
      <li>
        <a href="paremetre_user.php">Paramètres<span class="glyphicon glyphicon-heart pull-right"></span></a>
      </li>
      <li>
        <a href="#">Déconnection<span class="glyphicon glyphicon-log-out pull-right"></span></a>
      </li>
    </ul>
  </li>
</ul>
</body>
</html>