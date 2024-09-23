<?php
session_start();
include ("includes/database.php");
include('functions/common_function.php');
if(!isset($_SESSION["UID"]))
{
    header("location:userlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
  
     <!-- bootstrap css link -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- googlefont poppins link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- font awesome cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>



  

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
       background-color:#fff;
        border:none;
   }
   
    /*navigationbar styling end*/

    /* Product cards styling*/

    .background{
        background-color:#ffffff;
    }
    .card{
        width:260px;
        padding:15px;
        background-image:linear-gradient(to right,#f78100,#ff6c00);
     
        margin:10px 10px 10px 10px;
        border-radius: 10px; 
        transition:0.2s;
        transform: scale(0.9);
        box-shadow:0px 0px 5px 2px gray;
    }
    .card:hover{
        transform:scale(1);
        transition:0.2s;
    }
    .card-holder{
        display:flex;
        flex-wrap: wrap;
        justify-content:center;
   

    }
    .cname{
        color:white;
        font-size:20px;
        font-weight:600;
        text-shadow:0px 5px 5px black;
    }
    .cprice{
        color:white;
        font-size:15px;
        text-shadow:0px 5px 5px black;
        
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
    
    .filter{
        /* width:fit-content; */
      color:orange;
      background-color:#fff;
      transition:0.3s;
    }
    .filter:hover{
        color:#fff!important;
        font-weight:700;
      background-color:orange!important;
      transition:0.3s;
    }
     /*searchbar style */
     .form{
        width:fit-content;
        position:relative;
        background-color:red;
    }
    .searchbar{
        width:200px;
        outline:none;
        padding-left:10px;
    }
    .search-btn{
        border:none;
        background-color: transparent;
        position:absolute;
        right:0;
    }

   </style>

</head>

<body>
<nav class="navbar  navbar-default  navbar-fixed-top navigation text-center">
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
                    <a href="displayall.php" class="btn navibtn">All</a>

<li class="dropdown">
<a class="dropdown-toggle filter" data-toggle="dropdown" href="#">cloth <span class="caret"></span></a>
<ul class="dropdown-menu">
<?php getcloths(); ?>
</ul>
</li>

<li class="dropdown">
<a class="dropdown-toggle filter" data-toggle="dropdown" href="#">Size <span class="caret"></span></a>
<ul class="dropdown-menu">
<?php getsize(); ?>
</ul>
</li>

<li class="dropdown">
<a class="dropdown-toggle filter" data-toggle="dropdown" href="#">Fabric <span class="caret"></span></a>
<ul class="dropdown-menu">
<?php getfabric(); ?>
</ul>
</li>

                    <a href="cart.php" class="btn navibtn">  <ion-icon name="cart"></ion-icon><sup> <?php  cart_item();?></a>
                    <a href="displayall.php" class="btn navibtn"><ion-icon name="shirt"></ion-icon>shop</a>
                    <a href="userdashboard.php" class="btn navibtn"><i class="fa-solid fa-user"></i>Profile</a>
                    <a href="logout.php" class="btn navibtn"><ion-icon name="log-out"></ion-icon>logout</a>
                    </ul>
                </div>
            </div>
        </nav>
 
        
        <?php
cart();
?>   






<div class="container-fluid text-center background" style=" padding:0; margin-top:60px;">
        <div class="container text-center">
        <div class="row card-holder">
           
            <div style="width:100%; display:flex; flex-direction:column;align-items:center;">
            <h1 style="font-weight:700; color:#ff6c00;">ALL PRODUCTS</h1><hr>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="form">
                <input type="text" placeholder="Search" name="search" required class="searchbar">
                <button type="submit" name="search-btn" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            </div>



            <?php
// calling function
search_products();
get_unique_cloths();
get_unique_sizes();
get_unique_fabrics();


?>
</div>
</div>
</div>




 <!-----bootstrap Js link---->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>