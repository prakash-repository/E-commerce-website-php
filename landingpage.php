<!--connect file-->
<?php
session_start();
include('includes/database.php');
include('functions/common_function.php');

if(!isset($_SESSION["UID"]))
{
    header("location:index.php");
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARU'S FASHION</title>
   
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
        /* poppins link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
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
        background-color:transparent;
        border:none;
    }
    
    /*navigationbar styling end*/

    /* banner content correction*/ 
    .banner-box{
        position:relative;
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        justify-content:center;
        text-align:center;
        height:100vh;
        background-repeat:no-repeat;
        background-position-x: center;
        background-image:url("https://th.bing.com/th/id/R.0bb8f61db777e1b998e80792cd99e439?rik=zRHFj5SgVg3swQ&riu=http%3a%2f%2fwww.v3wall.com%2fwallpaper%2f1920_1080%2f1010%2f1920_1080_20101027082549177157.jpg&ehk=%2fdcMZNmS0b9KMn%2fA8bu3q8%2fFXUYJ2bW6ZpLlzItJmBE%3d&risl=&pid=ImgRaw&r=0");
    
    }

.banner-box h1{
        text-shadow:3px 3px grey;
        color:white;
    }
    .banner-box span{
        font-weight:800;
        color:#f78100;
        text-shadow: 3px 3px white;
    }
    .banner-box p{
        outline:none;
        border:none;
        color:#000;
        font-size:20px;
        font-weight: 600;
        color:white;
        text-shadow: 2px 2px grey;
        transition:0.1s linear;
    }
    .banner-box p:hover{
        color:#f78100;
        text-shadow: 2px 2px white;
        transform:scale(1.1);
        transition:0.1s linear;
    }
    /* banner content end*/ 


    /* footer style */
    .footer-box{
        width:100%;
        background-color:#fafafa;
        display:flex;
        justify-content:center;
    }
    .footer-content1,.footer-content2{
        color:#F78100;
        font-weight:800;
        font-size:35px;
    }
    .footer-content2{
        font-size:25px;
        align-self:center;
    }

    </style>
</head>

<body>
    <nav class="navbar  navbar-default  navbar-fixed-top navigation text-center">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pppp">
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
                
                
                <div class="collapse navbar-collapse" id="pppp">

                    <ul class="nav navbar-nav navbar-right">

                    <a href="cart.php" class="btn navibtn">  <ion-icon name="cart"></ion-icon><sup> <?php  cart_item();?></a>
                    <a href="displayall.php" class="btn navibtn"><ion-icon name="shirt"></ion-icon>shop</a>
                    <a href="userdashboard.php" class="btn navibtn"><i class="fa-solid fa-user"></i>Profile</a>
                    <a href="logout.php" class="btn navibtn"><ion-icon name="log-out"></ion-icon>logout</a>
                    </ul>
                </div>
            </div>
        </nav>

      <?php cart(); ?>


 <div class="container-fluid banner-box" id="banner-box">

 <div>
        <?php
        $sq="SELECT * FROM users WHERE UID='{$_SESSION["UID"]}'";
        $res=$db->query($sq);
        if($res->num_rows>0)
        {
            $row=$res->fetch_assoc();
            $n=$row["NAME"];
            $add=$row["ADDRESS"];
            $ph=$row["PHONENO"];
            $sn=$_SESSION["NAME"];
        }

        ?>
      <h1>WELCOME <span ><?php echo ($n)? $n : 'GUEST' ?></span></h1>
      <a href="displayall.php"><p class="btn">Explore the Fashion world</P></a>
      <P><?php // total_cart_price();?></p>
     </div>




 </div>


<?php
include ("footer.php");
?>
  


 <!-----bootstrap Js link---->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <script>
        let footer=document.getElementById("footerbox");
        let bannerimg=document.getElementById("banner-box");

        bannerimg.addEventListener("mouseover",function(){

            footer.classList.add("footer-js");

        })
    </script> -->
</body>
</html>