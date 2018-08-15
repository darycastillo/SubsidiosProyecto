<?php
?>

<div class="">
    <div class="">
<form class="form-horizontal center-block">

    <form class="form-group">
        <div class="form-group">
            <label for="idproyecto" class="control-label col-xs-2">Id Proyecto</label>
            <div class="col-xs-2">
                <select id="idproyecto" name="idproyecto" required="required" class="select form-control">
                    <option value="rabbit">Rabbit</option>
                    <option value="duck">Duck</option>
                    <option value="fish">Fish</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="iddesarrollador" class="control-label col-xs-2">Id Desarrollador</label>
            <div class="col-xs-2">
                <select id="iddesarrollador" name="iddesarrollador" required="required" class="select form-control">
                    <option value="rabbit">Rabbit</option>
                    <option value="duck">Duck</option>
                    <option value="fish">Fish</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="nombreproyecto" class="control-label col-xs-2">Nombre del Proyecto</label>
            <div class="col-xs-6">
                <input id="nombreproyecto" name="nombreproyecto" placeholder="Ingrese el nombre del Proyecto" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="latitud" class="control-label col-xs-2">Latitud del Proyecto</label>
            <div class="col-xs-2">
                <input id="latitud" name="latitud" placeholder="Ingrese la Latitud" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="longitud" class="control-label col-xs-2">Longitud del Proyecto</label>
            <div class="col-xs-2">
                <input id="longitud" name="longitud" placeholder="Ingrese la Longitud" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="fechainicio" class="control-label col-xs-2">Fecha de Inicio</label>
            <div class="col-xs-2">
                <input id="fechainicio" name="fechainicio" type="date" required" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="fechafinalizacion" class="control-label col-xs-2">Fecha Finalización</label>
            <div class="col-xs-2">
                <input id="fechafinalizacion" name="fechafinalizacion" type="date" required="required" class="form-control">
            </div>
        </div>

        <form class="form-horizontal">
            <div class="form-group">
                <label for="nombredesarrollador" class="control-label col-xs-2">Nombre Desarrollador</label>
                <div class="col-xs-6">
                    <input id="nombredesarrollador" name="nombredesarrollador" placeholder="Ingrese el nombre" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="nit" class="control-label col-xs-2">Nit</label>
                <div class="col-xs-6">
                    <input id="nit" name="nit" placeholder="Ingrese el nit" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="direcempresa" class="control-label col-xs-2">Dirección Empresa</label>
                <div class="col-xs-6">
                    <input id="direcempresa" name="direcempresa" placeholder="Ingrese la dirección" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="nompropietario" class="control-label col-xs-2">Nombre del Propietario</label>
                <div class="col-xs-6">
                    <input id="nompropietario" name="nompropietario" placeholder="Ingrese el nombre" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="correoelectronico" class="control-label col-xs-2">Correo Electrónico</label>
                <div class="col-xs-2">
                    <input id="correoelectronico" name="correoelectronico" placeholder="Ingrese el correo" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="telefono" class="control-label col-xs-2">Teléfono</label>
                <div class="col-xs-2">
                    <input id="telefono" name="telefono" placeholder="Ingrese el Telefono" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-offset-2 col-xs-10">
                    <button name="submit" type="submit" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </form>
    </form>
</form>
</div>
</div>