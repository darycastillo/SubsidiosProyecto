<?php
?>

<div class="">

    <div class="">
    <form class="form-horizontal center-block">

        <form class="form-horizontal">
            <div class="form-group">
                <label for="departamento" class="control-label col-xs-2">Departamento</label>
                <div class="col-xs-10">
                    <select id="departamento" name="departamento" class="select form-control" aria-describedby="departamentoHelpBlock" required="required">
                        <option value="rabbit">Departamento 1</option>
                        <option value="duck">Departamento 1</option>
                        <option value="fish">Departamento 1</option>
                        <option value="dog">Departamento 1</option>
                    </select>
                    <span id="departamentoHelpBlock" class="help-block">Seleccione su departamento al que pertenece el municipio</span>
                </div>
            </div>
            <div class="form-group">
                <label for="municipio" class="control-label col-xs-2">Municipio</label>
                <div class="col-xs-10">
                    <input id="municipio" name="municipio" placeholder="Ingrese el nombre del municipio" type="text" class="form-control" required="required">
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