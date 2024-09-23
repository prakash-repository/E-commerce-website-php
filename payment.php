<?php

session_start();
$t=$_GET['t'];
$address=$_GET['a'];
$phoneno=$_GET['p'];

if($address=='')
{
    echo"<script>alert('Please Update Your Address...')</script>";
    echo"<script>window.open('order.php?t=$t','_self')</script>";
}
if($phoneno=='')
{
    echo"<script>alert('Please Update Your Phone no...')</script>";
    echo"<script>window.open('order.php?t=$t','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        .box{
           
            background-color:white;
            display:flex;
            flex-wrap:wrap;
            position:absolute;
            top:50px;
            justify-content: space-around;
            align-items:center;
            height:500px;
            width:90%;
            box-shadow:0px 0px 10px 3px;
        }
       .main-box{
        background:linear-gradient(to right,#F5F7F8,#F3F3F3);
        display:flex;
        justify-content: center;
        position:relative;
        height:100vh;

       }
        .main-box img{
            border-radius:25px;
            box-shadow:0px 0px 5px 2px;
            width:200px;
            height:200px;
        }

    </style>
</head>
<body>
    
<div class="container main-box">
       
<div class="row box">
    <h1 style="width:100%; text-align:center; padding:0; margin:0; font-size:50px; color:#F78100;">PAYMENT METHODS</h1>

        <div class="col-md-4">
        <a href="payments/cod.php?t=<?php echo $_GET['t']?>&m=cash on delivery"><img src="page images/cod.png"></a>
        </div>
        
        <div class="col-md-4">
        <a href="payments/googlepay.php?t=<?php echo $_GET['t']?>&m=googlepay"><img src="page images/gpay.png"></a>
        </div>
       
        <div class="col-md-4">
        <a href="payments/phonepe.php?t=<?php echo $_GET['t']?>&m=phonepe"><img src="page images/phonepe.png"></a>
        </div>
        
        <div class="col-md-4">
        <a href="payments/paytm.php?t=<?php echo $_GET['t']?>&m=paytm"><img src="page images/paytm.png"></a>
        </div>
</div>

</div>


<button onclick="prt()">print</button>
<script>
{
function prt()
{
    window.print();
}
}
</script>
    
</body>
</html>