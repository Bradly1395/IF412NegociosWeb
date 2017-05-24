<?php
  $txtMensaje = "";
  $resultado = "";
  $cmbIteraciones = 5;

  if (isset($_POST["btnEnviar"])) {
    # code...
    $txtMensaje = $_POST["txtMensaje"];
    $cmbIteraciones = intval($_POST["cmbIteraciones"]);
    $resultado = "<ul>";
    for ($i=0; $i < $cmbIteraciones; $i++) {
      # code...
      $resultado .= "<li>" .$txtMensaje."</li>";
    }

    

    $resultado .= "</ul>";
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de ciclos</title>
  </head>
  <body>
    <form class="" action="ej3_ciclos.php" method="post">
      <input type="text" name="txtMensaje" value="<?php echo $txtMensaje ?>" id="txtMensaje"> <br>
      <select class="" name="cmbIteraciones" id="cmbIteraciones">
        <option value="5" <?php echo ($cmbIteraciones == 5)?"selected":""; ?> >5</option>
        <option value="15" <?php echo ($cmbIteraciones == 15)?"selected":""; ?>>15</option>
        <option value="25" <?php echo ($cmbIteraciones == 5)?"selected":""; ?>>25</option>
        <option value="35" <?php echo ($cmbIteraciones == 5)?"selected":""; ?>>35</option>
        <option value="45" <?php echo ($cmbIteraciones == 5)?"selected":""; ?>>45</option>
      </select>
    </form>
  </body>
</html>
