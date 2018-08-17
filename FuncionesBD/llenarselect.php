<?php
/**
 * Created by PhpStorm.
 * User: Dary Castillo
 * Date: 16/08/2018
 * Time: 21:47
 */

class llenarselect
{
    public function __construct($nombretabla,$columnaID,$columnaDES)
    {
        $parametro = parse_ini_file("settings.ini.php");
        $conn=new mysqli($parametro['host'],$parametro['user'],$parametro['password'],$parametro['dbname']);
        $query = $conn -> query ("SELECT * FROM ".$nombretabla);
        while ($valores = mysqli_fetch_array($query)) {
            echo '
                    <option value="'.$valores[''.$columnaID.''].'">'.$valores[''.$columnaDES.''].' </option>>
                    ';
        }

    }

   /* public function llenar($nombretabla,$columnaID,$columnaDES)
    {
        $parametro = parse_ini_file("settings.ini.php");
        $conn=new mysqli($parametro['host'],$parametro['user'],$parametro['password'],$parametro['dbname']);
                    $query = $conn -> query ("SELECT * FROM ".$nombretabla);
                   while ($valores = mysqli_fetch_array($query)) {
                        echo '
                    <option value="'.$valores[''.$columnaID.''].'">'.$valores[''.$columnaDES.''].' </option>>
                    ';
                    }

    }*/
}