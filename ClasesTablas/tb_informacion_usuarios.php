<?php
require_once("../FuncionesBD/easyCRUD.class.php");

class tb_informacion_usuarios  Extends Crud {

    # Your Table name
    protected $table = 'tb_informacion_usuario';

    # Primary Key of the Table
    protected $pk	 = 'ID_INFORMACION_USUARIO';

}



?>