<!DOCTYPE html>
<html>
<head>
    <title>Sanar Bestia</title>
</head>
<body>
    <h1>Sanar Bestia</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $producto->getNombre() ?>" required><br><br>

        Especie:<br>
        <input type="text" name="especie" value="<?= $producto->getEspecie() ?>" required><br><br>

        Salud:<br>
        <input type="text" name="estado_salud" value="<?= $producto->getSalud() ?>" required><br><br>

        Nivel de peligrosidad:<br>
        <input type="number" step="1" name="nivel_peligrosidad" value="<?= $producto->getNivel() ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
