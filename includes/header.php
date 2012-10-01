<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>InfoAcademy Hotel Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proiect final PHP I InfoAcademy, iulie 2012">
    <meta name="author" content="Marius Costache">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.php">Hotel Reservation</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Rezerva</a></li>
              <li><a href="links.php">Linkuri</a></li>
              <li><a href="contact.php">Contact</a></li>
              <?php
              if (isset($_SESSION['user'])) {
                echo "<li><a class='active' href='#'>Salut " . $_SESSION['user'] . "</a></li>";
                echo "<li><a href='?logout=1'>Logout</a></li>";
              }elseif (isset($_POST['user'])) {
                echo "<li><a class='active' href='#'>Salut " . $_POST['user'] . "</a></li>";
                echo "<li><a href='?logout=1'>Logout</a></li>";
              }
              
              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


