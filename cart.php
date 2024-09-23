<!--connect file-->
<?php
session_start();
include('includes/database.php');
include('functions/common_function.php');
?>
<?php
       if(isset($_POST['update_cart']))
       {
       $U=$_SESSION["UID"];
       $Q=$_POST["qtyinput"];
       $C=$_POST["CID"];
       $update_cart="UPDATE cart set QTY='{$_POST["qtyinput"]}' where
       UID='$U' AND CID='$C'";
       $db->query($update_cart);
       }
       ?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART DETAILS</title>
      <!---bootstrap css link----->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <!-----ionicon link---->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .cart_img{
            width: 80px;
            height: 80px;
            object-fit:cover;
            transition:all 0.1s linear;
            border-radius: 5px;

        }
        .cart_img:hover{
            transform:scale(1.25);
            transition:all 0.1s linear;
        }
        .heading{
            font-size: 30px;
            list-style-type: none;
            letter-spacing: 1px;
            text-shadow: none;
            display: flex;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .heading li{
            animation: spark 0.5s infinite linear;
        }
        @keyframes spark{
            0%{
                color: #484848;
                text-shadow: none;
            }
            15%{
                color: #484848;
                text-shadow: none;
            }
            20%{
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
            30%{
                color: #484848;
                text-shadow: none;
            }
            35%{
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
            50%{
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
            70%{
                color:#484848;
                text-shadow:none;
            }
            85%{
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
            90%{
                color:#484848;
                text-shadow:none;
            }
            100%{
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
        }
        ul li:nth-child(1){
            animation-delay: 1s;
        }
        ul li:nth-child(2){
            animation-delay: 2s;
        }
        ul li:nth-child(3){
            animation-delay: 1s;
        }
        ul li:nth-child(4){
            animation-delay: 2s;
        }
        ul li:nth-child(5){
            animation-delay: 3s;
        }
        ul li:nth-child(6){
            animation-delay: 4s;
        }
        ul li:nth-child(7){
            animation-delay: 3s;
        }
        ul li:nth-child(8){
            animation-delay: 4s;
        }
        ul li:nth-child(9){
            animation-delay: 5s;
        }
        ul li:nth-child(10){
            animation-delay: 6s;
        }
        ul li:nth-child(11){
            animation-delay: 5s;
        } 
        ul li:nth-child(12){
            animation-delay: 6s;
        }
        .navibtn{
        position: relative;
        color: #f78100;
        background: white;
        font-weight: 400;
        margin: 7px;
        border: 2px solid #f78100;
        overflow: hidden;
        z-index: 1;
        transition: 0.5s;
        border-radius: 5px;
        padding: 6px 4px;
        text-decoration: none;
        font-size: 15px;
        height:30px;;
    }
    .navibtn:before{
        content: "";
        position: absolute;
        background: #f78100;
        height: 70px;
        width: 80px;
        border-radius: 50%;
        z-index: -1;
    }
    .navibtn:hover{
        cursor: pointer;
        color: #ffffff !important;
         background: #f78100;
         transition: 0.9s;
    }
   
    .navibtn:before{
        top: 100%;
        left: 100%;
        transition: 0.9s;
    }
    .navibtn:hover::before{
        top: -30%;
        left: -30%;
    }
    .navigation{
        width: 100%;
        background-color:#fff;
        border:none;
    }
   table{
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
      margin-top:70px;
    }
    .order-nav{
        background-color: #ffffff;
        height:30px;
    }
    .totalamount{
        color:#F78100;
    text-shadow:0px 0px 1px rgba(0,0,0,0.7);
        position:absolute;
        top:0;
        padding:7px;
    }
    .order-btn{
        margin:10px;
    }
    .table-headings{
        background-color:#F78100;
        color:white;
    }
  
    .cart-btn{
        color:white;
        font-weight:700;
        background-color:orange;
        transition:0.3s;
    }

    .cart-btn:hover{
        color:white;
        text-shadow: 0px 0px 1px #F78100;
        background-color:orange;
        transition:0.3s;
    }
    

    
    /*navigationbar styling end*/
    
   </style>
</head>
<body>
  
<nav class="navbar  navbar-inverse  navbar-fixed-top navigation text-center">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pppp">
                       <span class="icon-bar"></span> 
                       <span class="icon-bar"></span> 
                       <span class="icon-bar"></span> 
                    </button>
                   <ul class="heading navbar-brand">
                        <li>P</li>
                        <li>A</li>
                        <li>R</li>
                        <li>U'</li>
                        <li>S</li>
                        <li>F</li>
                        <li>A</li>
                        <li>S</li>
                        <li>H</li>
                        <li>I</li>
                        <li>O</li>
                        <li>N</li>
                    </ul>
                </div>
                
                
                <div class="collapse navbar-collapse" id="pppp">

                    <ul class="nav navbar-nav navbar-right">

                  
                    <a href="landingpage.php" class="btn navibtn"><ion-icon name="home"></ion-icon>Home</a>
                    <a href="displayall.php" class="btn navibtn"><ion-icon name="shirt"></ion-icon>shop</a>
                    <a href="profile.php" class="btn navibtn"><i class="fa-solid fa-user"></i>Profile</a>
                    <a href="logout.php" class="btn navibtn"><ion-icon name="log-out"></ion-icon>logout</a>
                    </ul>
                </div>
            </div>
        </nav>
        




<!--calling cart function-->
<?php
cart();
?>



<!--fourth child-table-->
<div class="container main">
    <div class="row">
      <form action="" method="post">
            <table class="table table-bordered text-center table-responsive">
            
            <!--php code to display data-->
            <?php

$UID=$_SESSION["UID"];
 $total_price=0;
 $cart_query="SELECT * FROM `cart` where UID='$UID'";
  $result=$db->query($cart_query);
 if($result->num_rows>0)
 {
    echo "<thead class='table-headings'
    <tr>
        <th class='text-center'>PRODUCT TITLE</th>
        <th class='text-center'>PRODUCT IMAGE</th>
        <th class='text-center'>PRICE</th>
        <th class='text-center'>QUANTITY</th>
        <th class='text-center'>PRODUCT QUANTITY</th>
        <th class='text-center'>Total Price</th>  
    </tr>
         </thead>
         <tbody>";

   while($row=$result->fetch_assoc())
   {
      $NAME=$row["CNAME"];
      $CID=$row["CID"];
      $FABRIC=$row["FABRIC"];
      $SIZE=$row["SIZE"];
      $IMAGE=$row["FILE"];
      $PRICE=$row["PRICE"];
      $UID=$_SESSION["UID"];
      $QTY=$row["QTY"];
    ?>        
                <tr>
                <td><?php echo $NAME?></td>
                <td><img src="./admin/cloth/<?php echo $IMAGE?>" class="cart_img"></td>
                
                 
       
                <td><?php echo $PRICE?></td>
               
                
                <form action="" method="post">
                <input type="hidden" value="<?php echo $CID ?>" name="CID">
                <td><input type="number" min="1" value="<?php echo $QTY?>" name="qtyinput" style='width:40px; border:none; outline:none;' class='text-center'></td>
               
                <td><input type="submit" value="Update Cart" class="btn cart-btn" name="update_cart">
                <a href="deletecart.php?cid=<?php echo $CID ?>" class="btn cart-btn">Delete</a></td>
                </form>
                
                   
                <td><?php echo $total= number_format($PRICE*$QTY)?></td>
   </tr>
  
     <?php 
     error_reporting(0);
      $grandtotal=$grandtotal+$PRICE*$QTY;

     }
     error_reporting(0);
          echo  "<nav class='navbar navbar-fixed-bottom order-nav'>
                 <h4 class='text-left totalamount'><strong>SUBTOTAL:  $grandtotal/-</strong></h4>
                 
                 <h4 class='text-right order-btn'><a href='order.php?t=$grandtotal' class='btn cart-btn'>Place Order</a></h4>
                 </nav>";
     }
     else
     {
        echo "<h2 class='text-center text-danger' style='margin-top:100px;'>Cart is empty</h2>";
     }

     ?> 
        </tbody>
        </table>
      
    
        <?php  
      
         ?>
         
 
</div>
</div>
</form>





 <!-----bootstrap Js link---->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>