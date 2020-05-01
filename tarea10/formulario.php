<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
<style>
.color {
    border: 1px solid #000;
}
</style>
</head>
<body>

<?php
    session_start();
    if(!$_SESSION["personas"]) {
        $_SESSION["personas"] = [] ;
    }
?>

<form action="formulario.php" method="post">
  <p>Nombre: <input type="text" name="nombre" size="50"></p>
  <p>Apellido: <input type="text" name="apellido"></p>
  <p>Fecha de nacimiento: <input type="date" name="fecha">
</p>
  <p>
    <input type="submit" value="Enviar">
  </p>
</form>
<?php
  if(!empty($_POST)){
        array_push($_SESSION["personas"] , [
            'nombre'=>$_POST["nombre"],
            'apellido'=>$_POST["apellido"],
            'fecha'=>$_POST["fecha"]
        ]);
    }
?>
<table style="width:50%">

    <tbody>
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Apellido</strong></td>
            <td><strong>Fecha de Nacimiento</strong></td>
        </tr>
        <?php
        foreach($_SESSION['personas'] as $persona){
        ?>

        <tr classs = "color">
            <td class="color"><?= $persona["nombre"] ?></td>
            <td class="color"><?= $persona["apellido"] ?></td>
            <td class="color"><?= $persona["fecha"] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>

</table><br>
<a href="./eliminar.php"><button> Eliminar sesión</button></a>

</body>
</html>
