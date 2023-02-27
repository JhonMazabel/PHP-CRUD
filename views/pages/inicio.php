<?php

if (!isset($_SESSION["Logueado"])) {
    echo "<script>window.location = 'index.php?pagina=ingreso';</script>";
    return;
} else {
    if(!$_SESSION["Logueado"]) {
        echo "<script>window.location = 'index.php?pagina=ingreso';</script>";
        return;
    }
}

$usuarios = ControladorFormularios::ctrObtenerUsuarios(null, null);

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $key => $value): ?>
                <tr>
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $value["nombre"]; ?></td>
                    <td><?php echo $value["correo"]; ?></td>
                    <td><?php echo $value["fecha"]; ?></td>
                    <td>
                        <div>
                            <div class="p-1">
                            <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning text-white">Editar</a>
                            </div>
                            
                            <form method=post>
                                <input type="hidden" name="id" value="<?php echo $value["id"]; ?>">
                                <?php 
                                    $eliminar = new ControladorFormularios();
                                    $eliminar->ctrEliminar();
                                ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>