<?php
    function Connect(){
        $szerver="localhost";
        $user = "root";
        $pass = "";
        $db = "lotto";
        
        $con = mysqli_connect($szerver,$user,$pass,$db);
        if(!$con)
        {
            die("Nem sikerül kapcsolódni!");
        }
        return $con;


    }
?>