<?php
session_start();
include('./includes/database.php');
include('./functions/common_function.php');

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
    <title>PROFILE</title>

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

         .heading {
            font-size: 30px;
            list-style-type: none;
            letter-spacing: 1px;
            text-shadow: none;
            display: flex;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .heading li {
            animation: spark 0.5s infinite linear;
        }

        @keyframes spark {
            0% {
                color: #484848;
                text-shadow: none;
            }

            15% {
                color: #484848;
                text-shadow: none;
            }

            20% {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }

            30% {
                color: #484848;
                text-shadow: none;
            }

            35% {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }

            50% {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }

            70% {
                color: #484848;
                text-shadow: none;
            }

            85% {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }

            90% {
                color: #484848;
                text-shadow: none;
            }

            100% {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
            }
        }

        ul li:nth-child(1) {
            animation-delay: 1s;
        }

        ul li:nth-child(2) {
            animation-delay: 2s;
        }

        ul li:nth-child(3) {
            animation-delay: 1s;
        }

        ul li:nth-child(4) {
            animation-delay: 2s;
        }

        ul li:nth-child(5) {
            animation-delay: 3s;
        }

        ul li:nth-child(6) {
            animation-delay: 4s;
        }

        ul li:nth-child(7) {
            animation-delay: 3s;
        }

        ul li:nth-child(8) {
            animation-delay: 4s;
        }

        ul li:nth-child(9) {
            animation-delay: 5s;
        }

        ul li:nth-child(10) {
            animation-delay: 6s;
        }

        ul li:nth-child(11) {
            animation-delay: 5s;
        }

        ul li:nth-child(12) {
            animation-delay: 6s;
        }

        .navibtn {
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
            height: 30px;
            ;
        }

        .navibtn:before {
            content: "";
            position: absolute;
            background: #f78100;
            height: 70px;
            width: 80px;
            border-radius: 50%;
            z-index: -1;
        }

        .navibtn:hover {
            cursor: pointer;
            color: #ffffff !important;
            background: #f78100;
            transition: 0.9s;
        }

        .navibtn:before {
            top: 100%;
            left: 100%;
            transition: 0.9s;
        }

        .navibtn:hover::before {
            top: -30%;
            left: -30%;
        }

        .navigation {
            width: 100%;
            background-color: transparent;
            border: none;
        }

        /*navigationbar styling end*/



        /* dasboard style starts */
        /* side navbar starts */
       
        .navigation-links-container {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            margin-top: 50px;
            height: 92vh;
            background-image: linear-gradient(to right, #F78100, #ff8400);
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;

        }
        .icons{
    display:flex;
    gap:5px;
}
        .dashboard-owner-name {
            text-transform: uppercase;
            width: 100%;
            font-weight: 600;
            font-size: 20px;
            color: white;
            text-shadow: 1px 1px 3px black;
            text-decoration: none;

        }

        
        .links-box {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }
        
        .navigation-links-container .links{
            text-decoration: none;
            color: white;
            font-size: 15px;
            padding: 5px;
        }
        /* side navbar ends */


        /* content style start */
        .content-display-container {
            padding: 0;
            overflow-y:scroll;
            display: flex;
            justify-content: space-around;
            align-items:center;
            flex-wrap: wrap;
            margin-top: 50px;
            height: 90vh;
            background-color: #fafafa;
        }

      
     .form{
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        height:70%;
        width:70%;
        background-color:#fff;
        display:flex;
        flex-direction:column;
        justify-content:center;
     }
     .content-name{
        text-transform: uppercase;
            width: 100%;
            font-weight: 800;
            font-size: 20px;
            color: #F78100;
            text-shadow: 1px 1px 3px #fafafa;
            text-decoration: none;
     }
     .form input{
        outline:none;
        padding:5px 10px;
        margin-bottom:20px;
        align-self:center;
        width:50%;
     }
     .form button{
        border:1px solid #F78100;
        font-weight:700;
        width:fit-content;
        align-self:center;
        color:orange;
        background-color:whitesmoke;
        transition:0.3s;
    }
    .form button:hover{
        border:1px solid #fff;
        color:white;
        background-color:orange;
        transition:0.3s;
    }
      
        
/* content style ends */

        
     </style>
</head>
<body>
     <!-- navigationbar -->
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

                    <a href="cart.php" class="btn navibtn"> <ion-icon name="cart"></ion-icon><sup> <?php cart_item(); ?></a>
                    <a href="displayall.php" class="btn navibtn"><ion-icon name="shirt"></ion-icon>shop</a>
                    <a href="logout.php" class="btn navibtn"><ion-icon name="log-out"></ion-icon>logout</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- dashboard -->
    <div class="container-fluid dashboard-box">


        <div class="row">

            <div class="col-md-4 col-lg-2 col-xl-2 col-sm-4 col-xs-4 navigation-links-container">
            <div class="icons">    
            <a class="links" id="indicator" href="userdashboard.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
                <a class="links" id="indicator" href="changepass.php"><ion-icon name="refresh-outline"></ion-icon></a>
                </div>
                <h4 class="text-center dashboard-owner-name">WELCOME <?php echo $_SESSION["NAME"]; ?></h4>

                <div class="links-box">
                    <a class="btn links" href="profile.php">PROFILE</a>
                    <a class="btn links" href="bill.php">BILLS DETAILS</a>
                    <a class="btn links active" href="changepass.php">CHANGE PASSWORD</a>

                </div>
            </div>


               
            <div class="col-md-8 col-lg-10 col-xl-10 col-sm-8 col-xs-8 content-display-container">
              
             
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="form text-center">
              
                <h2 class="content-name" >Change Your Password</h2>
                
                
                <input type="text" placeholder="Old Password" name="opass" required>
                <input type="password" placeholder="Enter New Password" name="npass" required>
                <input type="password" placeholder="Confirm Password" name="cnpass" required>
                <button type="submit" name="submit" class="btn btn-success">Change</button>
                
              
              
                </form>
      
                
        </div>
    </div>

</body>
</html>
               
               
              
             
                <?php



                  if(isset($_POST["submit"]))
                  {
                    global $db;
                    $UID=$_SESSION["UID"];
                    $opass=$_POST["opass"];
                    $npass=$_POST["npass"];
                    $cnpass=$_POST["cnpass"];
                      $sql="SELECT * FROM users WHERE PASS='$opass' AND UID='$UID'";
                      $res=$db->query($sql);
                      if($res->num_rows>0)
                      {
                        if($npass==$cnpass)
                        {
                          $s="UPDATE users SET PASS='$npass' WHERE UID='$UID'";
                          $db->query($s);
                          echo "<script>alert('Password has been changed succesfully.')</script></p>";
                        }
                        else{
                            echo  "<script>alert('Password doesn't match')</script></p>";
                        }
                    }
                        else
                        {
                            echo  "<script>alert('Invalid Password')</script></p>";
                        }
                      
                     
                  }

                
                ?>
      
 <!-----bootstrap Js link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>