<?php
include ("../FuncionesBD/llenarselect.php");
?>

<div class="">
    <div class="">
    <form class="form-horizontal center-block" action="../inserciones/tb_informacion_usuarios.php" method="post">
        <div class="form-group">
            <label for="nombre1" class="control-label col-xs-2">Nombre 1</label>
            <div class="col-xs-8">
                <input id="nombre1" name="nombre1" type="text" required="required" placeholder="Ingrese su nombre" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre2" class="control-label col-xs-2">Nombre 2</label>
            <div class="col-xs-8">
                <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese su nombre" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre3" class="control-label col-xs-2">Nombre 3</label>
            <div class="col-xs-8">
                <input id="nombre3" name="nombre3" type="text"  placeholder="Ingrese su nombre" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="apellido1" class="control-label col-xs-2">Apellido 1</label>
            <div class="col-xs-8">
                <input id="apellido1" name="apellido1" type="text"   placeholder="Ingrese su apellido" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="apellido2" class="control-label col-xs-2">Apellido 2</label>
            <div class="col-xs-8">
                <input id="apellido2" name="apellido2" type="text"  placeholder="Ingrese su apellido"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="apellido3" class="control-label col-xs-2">Apellido 3</label>
            <div class="col-xs-8">
                <input id="apellido3" name="apellido3" placeholder="Ingrese su apellido" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="correo1" class="control-label col-xs-2">Correo Electronico</label>
            <div class="col-xs-8">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-envelope"></i>
                    </div>
                    <input id="correo1" name="correo1" PLACEHOLDER="Ingrese su correo electrónico" type="email" required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="telefono1" class="control-label col-xs-2">Teléfono</label>
            <div class="col-xs-2">
                <input id="telefono1" name="telefono1" placeholder="Ingrese el número" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="genero" class="control-label col-xs-2">Genero</label>
            <div class="col-xs-2">
                <select id="genero" name="genero" required="required" class="select form-control">
               <option value="0"> Seleccione</option>
                    <?php
                    new llenarselect('tb_generos','ID_GENERO','DESCRIPCION_GENERO');
                    ?>
                </select>
            </div>
        </div>

        <form class="form-horizontal">
            <div class="form-group">
                <label for="nameuser" class="control-label col-xs-2">Nombre de Usuario</label>
                <div class="col-xs-8">
                    <input id="nameuser" name="nameuser" placeholder="Ingrese su nombre de usuario" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="clave" class="control-label col-xs-2">Clave</label>
                <div class="col-xs-2">
                    <input id="clave" name="clave" placeholder="Ingrese su Clave" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="roluser" class="control-label col-xs-2">Rol de Usuario</label>
                <div class="col-xs-2">
                    <select id="roluser" name="roluser" required="required" class="select form-control">
                        <option value="0"> Seleccione</option>
                        <?php
                        new llenarselect('tb_roles','ID_ROL','DESCRIPCION_CORTA');
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="unidadtrabajo" class="control-label col-xs-2">Unidad de Trabajo</label>
                <div class="col-xs-2">
                    <select id="unidadtrabajo" name="unidadtrabajo" class="select form-control" required="required">
                        <option value="0"> Seleccione</option>
                        <?php
                        new llenarselect('tb_unidad_trabajo','ID_UNIDAD_TRABAJO','DESCRIPCION_UNIDAD');
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="estatus" class="control-label col-xs-2">Estatus</label>
                <div class="col-xs-2">
                    <select id="estatus" name="estatus" class="select form-control" required="required">
                        <option value="0"> Seleccione</option>
                        <option value="1"> Activo</option>
                        <option value="2"> Inactivo</option>

                    </select>
                </div>
            </div>

        <div class="form-group row">
            <div class="col-xs-offset-2 col-xs-8">
                <button name="submit" type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </form>
</div>
</div>
