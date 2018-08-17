<?php
?>
 <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>

    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post" action="grabar.php">
     <div class="form-group ">
      <label class="control-label requiredField" for="nombre">
    Nombre
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" type="text"/>
      <span class="help-block" id="hint_nombre">
        por favor su nombre
    </span>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="apellido">
    Apellido
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="apellido" name="apellido" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField">
    sexo
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="M"/>
         Masculino
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="F"/>
         Femenino
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="edad">
    Edad
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" type="text"/>
      <span class="help-block" id="hint_edad">
        Sus a&ntilde;itos
    </span>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-success " name="submit" type="submit">
        Grabar Informacion
    </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>