<!--connect file-->
<?php
session_start();
include('includes/database.php');
include('functions/common_function.php');
if(!isset($_SESSION["UID"]))
{
    header("location:userlogin.php");
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARU'S FASHION</title>
   
     <!---bootstrap css link----->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-----bootstrap Js link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-----ionicon link---->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file-->
    <link rel="stylesheet"  href="css\landingpage.css">


    <style>
       /*navigationbar styling*/  
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
    }
    /*navigationbar styling end*/
    table{
        background-color:orange;
        color:white;
    }
    .product-title{
        font-weight:800;
    }

    .img{
        width:250px;
        height:250px;
        object-fit:cover;
    }
    .img:hover{
        transform:scale(1.1);
        transition:0.1s linear all;
    }
    .cart-btn{
        color:orange;
        background-color:white;
        transition:0.3s;
    }
    .cart-btn:hover{
        color:white;
        background-color:orange;
        transition:0.3s;
    }
    </style>
</head>

<body>
    <nav class="navbar  navbar-inverse  navbar-fixed-top navigation text-center">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigator">
                       <span class="icon-bar"></span> 
                       <span class="icon-bar"></span> 
                       <span class="icon-bar"></span> 
                    </button>
                    <ul class="heading navbar-brand" id="logo">
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
                
                
                <div class="collapse navbar-collapse" id="navigator">

                    <ul class="nav navbar-nav navbar-right">

                    <a href="cart.php" class="btn navibtn">  <ion-icon name="cart"></ion-icon><sup> <?php  cart_item();?></a>
                    <a href="landingpage.php" class="btn navibtn"><ion-icon name="home"></ion-icon>Home</a>
                    <a href="displayall.php" class="btn navibtn"><ion-icon name="shirt"></ion-icon>shop</a>
                     <a href="#foot" class="btn navibtn"><ion-icon name="card"></ion-icon>About</a>
                    <a href="logout.php" class="btn navibtn"><ion-icon name="log-out"></ion-icon>logout</a>
                    </ul>
                </div>
            </div>
</nav>






<div class="container" style='margin-top:100px;'>
<div class="row">
<div class='col-md-4 col-lg-4 col-sm-4'></div>
<?php 

 //calling function
// get_unique_sizes();
// get_unique_fabrics();
cart();
?>

<?php



global $db;
//condition to check isset or not
if(isset($_GET['CID'])){
if(!isset($_GET['csize'])){
 if(!isset($_GET['cfabric'])){
  $product_id=$_GET['CID'];
$select_query="SELECT * FROM `cloths` where CID=$product_id";
$result_query=mysqli_query($db,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['CID'];
$product_title=$row['CNAME'];
$product_fabric=$row['CFABRIC_TYP'];
$product_size=$row['CSIZE'];
$product_keywords=$row['KEYWORDS'];
$product_image=$row['FILE'];
$product_price=$row['PRICE'];

$uid=$_SESSION["UID"];

echo "<div class='col-md-4 col-lg-4 col-sm-4'>
<form action='' method='post'>
<table class='table table-hovered table-bordered text-center'>
<tr>
 <td colspan='2' class='text-center'><div><img src='./admin/cloth/$product_image' class='img-responsive img-thumbnail img'></div></td>
 </tr>
 <tr>
 <td colspan='2' class='text-center'><h3 class='product-title'>$product_title</h3></td>
 </tr>
 <tr>
 <td><b>Fabric: </b></td>  <td><p>$product_fabric</p></td>
 </tr>
 <tr>
 <td><b>Size: </b></td> <td><p>$product_size</p></td>
 </tr>
 <tr>
 <td><b>Price: </b></td> <td><p>$product_price/-</p></td>
 </tr>
 
 <tr>
<td><a href='product_details.php?add_to_cart=$product_id' class='btn cart-btn'>Add to cart</a></td>
 <td><a href='displayall.php' class='btn cart-btn'>Go Home</a></td>
 </tr>
 </table>

 </form>
 </div>";
}
}
}
}



?>
<div class='col-md-4 col-lg-4 col-sm-4 col-xs-4'></div>
</div>
</div>



  
    
    




</body>

    
 


</html>