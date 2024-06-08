<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nombres de Usuarios de la Base de Datos:</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Usuario</th>
                        <th>Correo Electronico</th>
                        <th>Cedula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1;
                    foreach ($u as $value) {
                        echo "<tr>";
                        echo "<td class='text-center'>{$counter}</td>";
                        echo "<td>{$value['dap_nombres']}</td>";
                        echo "<td>{$value['usu_usuario']}</td>";
                        echo "<td class='text-center'>{$value['dap_correo']}</td>";
                        echo "<td class='text-center'>{$value['dap_cedula']}</td>";
                        echo "</tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>