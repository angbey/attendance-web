<?php
  session_start();
  include('config_table.php');

  session_destroy();
  header('location:login.php');
  exit();
?>