<?php 
  function generatepassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[];:<>,.?/';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
      $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
  }

  if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $password = generatepassword($length);
  }