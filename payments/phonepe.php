<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOOGLE PAY</title>
 
    <style>
        *{
            margin:0;
            padding:0;
        }
        .main-box{
            position:relative;
            display:flex;
            justify-content: center;
            background-image: url(https://entrackr.com/storage/2020/03/upi-image-2.jpg);
           
        }
        img{
            height:100vh;
            width:400px;
            object-fit:cover;
        }
        .toggle{
            display:flex;
            position:absolute;
       
            bottom:12%;
            left:44%;
            width:200px;
            height:48px; 
        }
        .toggle .price{
            padding:10px;
            outline:none;
            border:none;
            border-radius:10px;
            padding:5px 10px;
        }
        .toggle .ok{
            border:none;
            outline:none;
            background-color:green;
            color:white;
            text-align:center;
            width:fit-content;
            padding:5px 10px;
            border-radius:10px;
            font-weight:700;
        }
        /*image style */
        .image{
            width:400px;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid main-box">
    <img src="phonepe.png" class="img-responsive">
    </div>

    
        <form action="" method="post" class="toggle">
    <input type="submit" value="<?php echo $_GET['t'] ?>/-" class="price" name="price">
    <input type="submit" value="PROCEED" class="ok" name="submit">
        </form>
        <?php
        if(isset($_POST["submit"]))
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
    
</body>
</html>