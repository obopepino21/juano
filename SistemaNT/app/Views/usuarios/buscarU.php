<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        <form action="<?php echo base_url('index.php/buscarU') ?>" method="POST">

                            <label>Usuarios:</label>

                            <select id="usuarioId" name="uId" data-rel="chosen">
                                <?php
                                if ($u != "") {
                                    foreach ($u as $value) {
                                        print("<option value='" . $value['usu_id'] . "'>" . $value['dap_nombres'] . "</option>");
                                    }
                                }
                                ?>
                            </select>
                            <input type="submit" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
                            <br>
                            <label>El correo es:</label>
                            <br>

                        </form>

                        <?php

                        if ($uId != "") {
                            foreach ($uId as $value) {
                                print($value['dap_correo']);
                            }
                        }

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>