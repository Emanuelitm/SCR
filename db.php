<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'scr'
) or die(mysqli_error($mysqli));

?>
