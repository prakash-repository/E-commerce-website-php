<?php
session_start();
include ("database.php");
?>
<?php
        if(isset($_GET["m"])=='cash on delivery')
        {
            $s="SELECT * FROM cart WHERE UID='{$_SESSION["UID"]}'";
            $res=$db->query($s);
            $INVOICE=mt_rand();
           while($r=$res->fetch_assoc())
            {
            $CNAME=$r["CNAME"];
            $FABRIC=$r["FABRIC"];
            $SIZE=$r["SIZE"];
            $PRICE=$r["PRICE"];
            $QTY=$r["QTY"];

            $UID=$_SESSION["UID"];
            $ADDRESS=$_SESSION["ADDRESS"];
            $TOTAL=$_GET["t"];
            $METHOD=$_GET["m"];
            $sql="INSERT INTO orders(UID,INVOICENO,CNAME,FABRIC,SIZE,ADDRESS,PRICE,QTY,GRANDTOTAL,METHOD,LOG) VALUES ('$UID','$INVOICE','$CNAME','$FABRIC','$SIZE','$ADDRESS','$PRICE','$QTY','$TOTAL','$METHOD',NOW())";
            $db->query($sql);
            }
            $s1="DELETE FROM cart WHERE UID='{$_SESSION["UID"]}'";
            $db->query($s1);
            echo"<script>window.open('greetings.php?i=$INVOICE','_self')</script>";
        }
        
        
        
        ?>