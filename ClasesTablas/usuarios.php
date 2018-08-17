<?php 
	require_once("easyCRUD.class.php");

	class usuarios  Extends Crud {
		
			# Your Table name 
			protected $table = 'usuarios';
			
			# Primary Key of the Table
			protected $pk	 = 'ID';
	}

?>