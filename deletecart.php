<?php
session_start();
include('includes/database.php');
include('functions/common_function.php');

if(isset($_GET["cid"]))
{
    $sql="DELETE FROM cart WHERE CID='{$_GET["cid"]}'";
    $db->query($sql);
    echo"<script>window.open('cart.php','_self')</script>";
}

?>