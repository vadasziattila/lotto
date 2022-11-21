<?php
    function Ev(){
        $con=Connect();
        $sql="SELECT DISTINCT ev from otos";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_Close($con);
    }
    function Hetek(){
        $con=Connect();
        $ev=$_GET["evszam"];
        $sql="SELECT ID, het from otos where ev=".$ev;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_Close($con);
    }

    function Adatlap(){
        $con = Connect();
        $id = $_GET["id"];
        $sql="SELECT * from otos where ID=".$id;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_Close($con);
    }

    function OtosTalalatok(){
        $con = Connect();
        $sql="SELECT * from otos where talalat5_db > 0";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_Close($con);
    }

    function TalalatKereso($szamok){
        $con = Connect();
        $sql="SELECT * from otos where szam1 = ".$szamok[0]." and szam2 = ".$szamok[1]." and szam3 = ".$szamok[2]." and szam4 = ".$szamok[3]." and szam5 = ".$szamok[4];
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_Close($con);
    }
?>