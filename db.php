<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crudphpmysql'
) or die(mysqli_erro($mysqli));

?>
