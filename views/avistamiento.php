<!DOCTYPE html>
<html>
<body>

<h2>Bestia Avistada</h2>

<form method="POST" action="index.php?accion=crear" style="display:inline;">
    Nombre: 
    <input type="text" name="nombre" required>

    Especie: 
    <input type="text" name="especie" required>

    Nivel de peligrosidad:
    <input type="number" name="peligrosidad" required>

    Estado de Salud:
    <input type="text" name="salus" required>

    <button type="submit">Agregar</button>
</form>

<hr>

</html>