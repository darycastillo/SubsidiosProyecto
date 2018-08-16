<?php
?>
<div class="">
    <div class="">
        <form class="form-horizontal center-block">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="tipoingreso" class="control-label col-xs-2">Id tipo de ingreso</label>
                    <div class="col-xs-2">
                        <select id="tipoingreso" name="tipoingreso" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tiposolicitud" class="control-label col-xs-2">Id tipo de solicitud</label>
                    <div class="col-xs-2">
                        <select id="tiposolicitud" name="tiposolicitud" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idproyecto" class="control-label col-xs-2">Id proyecto</label>
                    <div class="col-xs-2">
                        <select id="idproyecto" name="idproyecto" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idusuario" class="control-label col-xs-2">Id usuario</label>
                    <div class="col-xs-2">
                        <select id="idusuario" name="idusuario" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="anioexpediente" class="control-label col-xs-2">Año expediente</label>
                    <div class="col-xs-2">
                        <select id="anioexpediente" name="anioexpediente" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numexpediente" class="control-label col-xs-2">Número expediente</label>
                    <div class="col-xs-2">
                        <select id="numexpediente" name="numexpediente" class="select form-control" required="required">
                            <option value="rabbit">Rabbit</option>
                            <option value="duck">Duck</option>
                            <option value="fish">Fish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecharegistro" class="control-label col-xs-2">Fecha de registro</label>
                    <div class="col-xs-2">
                        <input id="fecharegistro" name="fecharegistro" type="date" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="observaciones" class="control-label col-xs-2">Observaciones pendientes</label>
                    <div class="col-xs-6">
                        <textarea id="observaciones" name="observaciones" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="montosolicitado" class="control-label col-xs-2">Monto solicitado</label>
                    <div class="col-xs-2">
                        <input id="montosolicitado" name="montosolicitado" placeholder="Ingrese el monto" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="longproyecto" class="control-label col-xs-2">Longitud proyecto</label>
                    <div class="col-xs-2">
                        <input id="longproyecto" name="longproyecto" placeholder="Ingresar longitud" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="latproyec" class="control-label col-xs-2">Ingresar latitud</label>
                    <div class="col-xs-2">
                        <input id="latproyec" name="latproyec" placeholder="Ingrese latitud" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button name="submit" type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </div>
            </form>


        </form>

    </div>

</div>
