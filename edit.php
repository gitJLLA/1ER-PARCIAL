<?php
include("db.php");
$id= '';
$producto= '';
$cantidad= '';
$precio= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $producto = $row['producto'];
    $cantidad = $row['cantidad'];
    $precio = $row['precio'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $producto= $_POST['producto'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];

  $query = "UPDATE task set id = '$id', producto = '$producto', cantidad = '$cantidad', precio = '$precio' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea actualizada con éxito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="id" type="text" class="form-control" value="<?php echo $id; ?>" placeholder="Id">
        </div>
        <div class="form-group">
          <input name="producto" type="text" class="form-control" value="<?php echo $producto; ?>" placeholder="Producto">
        </div>
        <div class="form-group">
          <input name="cantidad" type="text" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Cantidad">
        </div>
        <div class="form-group">
        <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Precio">
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
