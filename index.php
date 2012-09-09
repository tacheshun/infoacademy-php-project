
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php';   ?>
<?php require_once 'includes/functions.php'; ?>
<?php session_start(); ?>
      <h1>Bine ati venit</h1>
      <p>Serviciu online de rezervari camere hotel.</p>
      <p>Va rugam sa va logati pentru a avea acces la sistem.</p>
      <form class="form-inline" action="rezervare.php" method="post">
        <input type="text" name="user" class="span2" placeholder="Login">
        <input type="password" name="password" class="span2" placeholder="Password">
        <input type="submit" value="Login" class="btn-primary"/>
      </form>
<?php require_once 'includes/footer.php'; ?>


