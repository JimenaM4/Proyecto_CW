<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD= "";
    const DB= "resp_proyecto_def";


    function connect(){
        $conexion = mysqli_connect (DBHOST, DBUSER, PASSWORD, DB);
       return $conexion;
    }
?>  