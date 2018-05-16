<?php
    include 'templates/header.php';
    require_once 'clases/Conexion.php';
    require_once 'clases/Destino.php';

    $objDestino = new Destino();
    $resultado = $objDestino -> listarDestinos();


?>

    <section class="container">
        <h1>Panel de Administración de Destinos</h1>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" width="10%">#</th>
                <th scope="col">Nombre Destino</th>
                <th scope="col">Region</th>
                <th scope="col">Precio</th>
                <th scope="col">Asientos</th>
                <th scope="col">Disponibles</th>
                <th scope="col" colspan="2">
                    <a class="btn btn-success" href="formAgregarDestino.php">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                     agregar
                    </a>
                </th>
            </tr>
            </thead>

            <tbody>
                                <?php

                foreach ($resultado as $fila) {

            ?>
            <tr>
                <th scope="row"><?php echo $fila['destID']; ?></th>
                <td><?php echo $fila['destNombre']; ?></td>
                <td><?php echo $fila['regID']; ?></td>
                <td><?php echo $fila['destPrecio']; ?></td>
                <td><?php echo $fila['destAsientos']; ?></td>
                <td><?php echo $fila['destDisponibles']; ?></td>
                <td>
                    <a class="btn btn-warning" href="formEditarDestino.php?destID=<?php echo $fila['destID']; ?>">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    modificar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="formEliminarDestino.php?regID=<?php echo $fila['destID']; ?>">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    eliminar
                    </a>
                </td>
            </tr>
                        <?php
                }

            ?>
            </tbody>
        </table>

    </section>

<?php
    include 'templates/footer.php';
?>
