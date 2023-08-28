<?php
  date_default_timezone_set('America/Sao_Paulo');

  $conn = new mysqli("localhost", "root", "root", "ajaxtiago");
  
  if ($conn->connect_error) {
      die("ERRO NA CONEXÃO: " . $conn->connect_error);

  }
?>