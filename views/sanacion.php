<!DOCTYPE html>
<html>
<head>
    <title>Sanar Bestia</title>
</head>
<body>
    <h1>Sanar Bestia</h1>

    <form method="POST" action="index.php?accion=sanacion" style="display:inline;">
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $bestia->getNombre() ?>" required><br><br>

        Especie:<br>
        <input type="text" name="especie" value="<?= $bestia->getEspecie() ?>" required><br><br>

        Salud:<br>
        <input type="text" name="estado_salud" value="<?= $bestia->getSalud() ?>" required><br><br>

        Nivel de peligrosidad:<br>
        <input type="number" step="1" name="nivel_peligrosidad" value="<?= $bestia->getNivel() ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
