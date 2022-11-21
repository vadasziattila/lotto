<?php
    function Connect(){
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $db = "otos";

        $conn = mysqli_connect($host,$user,$pwd,$db);

        return $conn;
    }
?>