<?php
require_once("../FuncionesBD/easyCRUD.class.php");

class tb_usuarios  Extends Crud {

    # Your Table name
    protected $table = 'tb_usuarios';

    # Primary Key of the Table
    protected $pk	 = 'ID_USUARIO';

}



?>