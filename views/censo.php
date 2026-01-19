<!DOCTYPE html>
<html>
<head>
    <title>Censo</title>
</head>
<body>
    <h1>Censo</h1>

    <a href="index.php?accion=avistamiento">Nuevo avistamiento</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Nivel de Peligrosidad</th>
            <th>Estado de Salud</th>
            <th>Acciones</th> 
        </tr>

        <?php if (!empty($bestias)): ?>
            <?php foreach ($bestias as $b): ?>
                <tr>
                    <td><?= $b->getNombre() ?></td>
                    <td><?= $b->getEspecie() ?></td>
                    <td><?= $b->getNivel() ?></td>
                    <td><?= $b->getSalud() ?></td>
                    <td>
    <a href="index.php?accion=sanacion&id=<?= $b->getNombre() ?>">Sanar</a>
                        |
    <a href="index.php?accion=liberar&id=<?= $b->getNombre() ?>">Liberar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No se han avistado bestias.</td>
            </tr>
        <?php endif; ?>

    </table>
</body>
</html>