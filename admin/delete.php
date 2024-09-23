<?php
session_start();
include ("../includes/database.php");

if(isset($_GET["CID"])){
    $CID=$_GET["CID"];
    $s1="DELETE FROM cloths WHERE CID=$CID";
    $db->query($s1);
    echo"<script>window.open('viewproducts.php','_self')</script>";
}


?>