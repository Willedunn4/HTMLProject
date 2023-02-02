<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $occupation = $_POST["occupation"];
    $byear = 2023 - $age;

    
    require_once "model.php";
    $summary = getSummary($fname, $lname, $age, $occupation, $byear);

    
    include "view.php";
  }
?>
