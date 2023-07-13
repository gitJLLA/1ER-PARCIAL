<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id = $_POST['id'];
  $producto = $_POST['producto'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];
  $query = "INSERT INTO task(id, producto, cantidad, precio) VALUES ('$id', '$producto', '$cantidad', '$precio')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea guardada con éxito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
