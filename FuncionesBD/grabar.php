<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 11/08/2018
 * Time: 08:34
 */

require ("Person.class.php");
require ("../ClasesTablas/usuarios.php");
/*$person =new Person();
$person->Firstname=$_POST["nombre"];
$person->Lastname=$_POST["apellido"];
$person->Sex=$_POST["radio"];
$person->Age=$_POST["edad"];
$person->otro='hoa';
$person->create();*/

$usuario=new usuarios();
$usuario->usuario='daryotro';
$usuario->password='palaaca';
$usuario->create();

