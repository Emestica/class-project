<?= $this->extend('default') ?>

<?= $this->section('contenido') ?>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive-md">

            <table class="table table-hover table-sm">
                <caption>Lista Roles</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Rol</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Fecha de Creacion</th>
                    </tr>
                </thead>
                <tbody style="font-weight: normal;">
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                        <td>Rol administrador.</td>
                        <td>Activo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jefe</td>
                        <td>Rol jefaturas.</td>
                        <td>Activo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>RRHH</td>
                        <td>Rol recursos humanos</td>
                        <td>Activo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Empleado Marketing</td>
                        <td>Rol empleados marketing.</td>
                        <td>Inactivo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cajeros</td>
                        <td>Rol empleados cajeros.</td>
                        <td>Activo</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection() ?>