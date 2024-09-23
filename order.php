<?php
session_start();
include ("includes/database.php");
include ("functions/common_function.php");
$totalamt=$_GET["t"];
$UID=$_SESSION["UID"];

//echo $totalamt;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
       <!---bootstrap css link----->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <!-----ionicon link---->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /* top icons styling*/ 
        body{
            background-color:#F2F1EB;
        }
        nav{
            background-color:white;
            display:flex;
            justify-content: center;
            box-shadow:0px 0px 5px 2px;
            height:150px;
        }
        
        .icons{
            text-align: center;
            font-size:30px;
            padding-top:6px;
            width:50px;
            height:50px;
            margin:0 auto;    
            box-shadow: 0px 0px 5px 2px;
            border-radius: 50%;    
        }
        .title{
            text-shadow:0px 0px 2px grey;
            position:relative;
            left:-20px; 
            width:50px;
        }
        /* addressbar*/ 
        .address{
            position:relative;
            padding-left:70px;
            box-shadow:0px 0px 2px 1px;
        }
       
        .product-bundle{
            margin-bottom:60px;
            margin-top:50px;
        }
        .order-nav{
        height:50px;
    }
    .totalamount{
        position:absolute;
        top:0;
        left:0;
        padding:5px;
        margin:10px;
    }
    .order-btn{
        margin-bottom:30px;
        position:absolute;
        top:0;
        right:0;
    }
    .final-table{
        margin-bottom:90px;
    }
    .cart-btn{
        border:none;
        color:white;
        font-weight:700;
        background-color:orange;
        transition:0.3s;
        /* margin:20px 25px; */
        position:absolute;
        top:8px;
        right:5px;
    }

    .cart-btn:hover{
        color:white;
        text-shadow: 0px 0px 1px #F78100;
        background-color:orange;
        transition:0.3s;
    }
    .content-name {
            text-transform: uppercase;
            width: 100%;
            font-weight: 800;
            font-size: 20px;
            color: #F78100;
            text-shadow: 1px 1px 3px #fafafa;
            text-decoration: none;
        }
.address-phoneno{
    background-color: transparent;
    border:none;
}

    </style>
</head>
<body>
    <nav>
        <span class="icons"><ion-icon name="checkmark-outline"></ion-icon>
    <small class='title'>Address</small></span>
        <span class="icons"><ion-icon name="cash-outline"></ion-icon>
    <small class='title'>Order Summary</small></span>
        <span class="icons"><ion-icon name="logo-paypal"></ion-icon>
    <small class='title'>Payment</small></span>
    </nav>

    <div class="container-fluid address">
        <div class="row">    
        <h2><b>Deliver to:</b></h2>
        <?php
        $sq="SELECT * FROM users WHERE UID='{$_SESSION["UID"]}'";
        $res=$db->query($sq);
        if($res->num_rows>0)
        {
            $row=$res->fetch_assoc();
            $n=$row["NAME"];
            $add=$row["ADDRESS"];
            $ph=$row["PHONENO"];
        }

        ?>
        
       <h4><b><?php echo $n ?></b></h4>
   

       <p><?php echo $add ?></p>
       <p><?php echo $ph ?></p>
        </div>
       
        <a href="profile.php" class="btn btn-primary cart-btn">CHANGE</a>
    </div>


    <div class="container-fluid">
        
            <?php
            if(isset($_SESSION["UID"]))
            {
               $sql="SELECT * FROM cart WHERE UID='{$_SESSION["UID"]}'";
               $res= $db->query($sql);
               while($row=$res->fetch_assoc())
               {
               $CID=$row["CID"];
               $CNAME=$row["CNAME"];
               $FABRIC=$row["FABRIC"];
               $SIZE=$row["SIZE"];
               $IMAGE=$row["FILE"];
               $PRICE=$row["PRICE"];
               $QTY=$row["QTY"];
               $TOTAL=$_GET["t"];
            //   $RAND=rand(699,999);


               echo"
               <div class='container product-bundle'>
               <div class='row'>



               <div class='col-md-4 text-center'>
               <img src='./admin/cloth/$IMAGE'class='img-responsive img-thumbnail' style='width:200px; height:200px; object-fit:cover;'><br>
               <input type='button' value='$QTY' style='width:100px;'>
               </div>
              
              
               <div class='col-md-8'>
               <h2><b>$CNAME</b></h2>
               <h4>FABRIC: $FABRIC</h4>
               <h4>SIZE: $SIZE</h4>
               <h4>PRICE:  $PRICE/-</h4>
               </div>
               
               
               
               </div>
               </div>

                 
               
               ";
               }
               
        }
        ?>
        <div class='container final-table'>
            <div class="row">
                <?php
                $s="SELECT * FROM cart WHERE UID='{$_SESSION["UID"]}'";
               $res= $db->query($s);
               $count=mysqli_num_rows($res);
               $GRANDTOTAL=$TOTAL+100 
                ?>

          <table class="table table-bordered">
            <tr><h2 class="content-name">PRICE DETAILS</h2></tr><hr>
            <tr>
                <td><b>PRICE  (<?php echo $count ?> ITEMS)</b></td> <td><b><?php echo number_format($TOTAL) ?></b></td>
            </tr>
            <tr>
                <td><b>DELIVERY CHARGES</b></td> <td><b>FREE  </b>Delivery</td>
            </tr>
            <tr>
                <td><b>SECURED PACKAGING FEE</b></td> <td><b>100/-</b></td>
            </tr>
            <tr>
                <td><h3><b>TOTAL AMOUNT</b></h3></td> <td><h3><b><?php echo number_format($GRANDTOTAL) ?>/-</b></h3></td>
            </tr>
          </table>

            </div>
        </div>



                  <nav class='navbar navbar-fixed-bottom order-nav'>
                 <h3 class='text-left totalamount'><strong><?php echo number_format($GRANDTOTAL) ?>/-</strong></h3>
                 
                 <a href="payment.php?t=<?php echo $GRANDTOTAL?>&a=<?php echo $add?>&p=<?php echo $ph?>" class="btn text-right cart-btn">Continue</a>
                 </nav>
            
            
   
    </div>

    

    
</body>
</html>