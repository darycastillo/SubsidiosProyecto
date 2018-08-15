<?php
?>

<div class="">
    <div class="">
    <form class="form-horizontal center-block">
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
            <label for="nombre1" class="control-label col-xs-2">Correo Electronico</label>
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
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
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
                    <select id="roluser" name="roluser" class="select form-control" required="required">
                        <option value="rabbit">Rol1</option>
                        <option value="duck">Rol2</option>
                        <option value="fish">Rol3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="unidadtrabajo" class="control-label col-xs-2">Unidad de Trabajo</label>
                <div class="col-xs-2">
                    <select id="unidadtrabajo" name="unidadtrabajo" class="select form-control" required="required">
                        <option value="rabbit">Departamento1</option>
                        <option value="duck">Departamento2</option>
                        <option value="fish">Departamento3</option>
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
<!--
<form>
    <div class="form-group row">
        <label for="nombre1" class="col-sm-2 col-form-label">Nombre 1</label>
        <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-address-card"></i>
                </div>
                <input id="nombre1" name="nombre1" type="text" required="required" class="form-control here">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nombre2" class="col-4 col-form-label">Nombre 2</label>
        <div class="col-8">
            <input id="nombre2" name="nombre2" type="text" class="form-control here">
        </div>
    </div>
    <div class="form-group row">
        <label for="nombre3" class="col-4 col-form-label">Nombre 3</label>
        <div class="col-8">
            <input id="nombre3" name="nombre3" type="text" class="form-control here">
        </div>
    </div>
    <div class="form-group row">
        <label for="apellido1" class="col-4 col-form-label">Apellido 1</label>
        <div class="col-8">
            <input id="apellido1" name="apellido1" type="text" required="required" class="form-control here">
        </div>
    </div>
    <div class="form-group row">
        <label for="apellido2" class="col-4 col-form-label">Apellido 2</label>
        <div class="col-8">
            <input id="apellido2" name="apellido2" type="text" class="form-control here">
        </div>
    </div>
    <div class="form-group row">
        <label for="apellido3" class="col-4 col-form-label">Apellido 3</label>
        <div class="col-8">
            <input id="apellido3" name="apellido3" type="text" class="form-control here">
        </div>
    </div>
    <div class="form-group row">
        <label for="correo1" class="col-4 col-form-label">Correo Electrónico</label>
        <div class="col-8">
            <input id="correo1" name="correo1" placeholder="Ingrese su correo" type="text" class="form-control here" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="telefono1" class="col-4 col-form-label">Teléfono</label>
        <div class="col-8">
            <input id="telefono1" name="telefono1" placeholder="Ingrese el número" type="text" class="form-control here" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="genero" class="col-4 col-form-label">Genero</label>
        <div class="col-8">
            <select id="genero" name="genero" class="custom-select" required="required">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
-->