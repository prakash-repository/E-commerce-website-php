<?php
session_start();
include ("../includes/database.php");

if(!isset($_SESSION["AID"]))
{
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Dashboard</title>
   
    <!---bootstrap css link----->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-----ionicon link---->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

   <!-- googlefont poppins link -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

   
    <style>
         /* poppins link */
         @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
         /* dasboard style starts */
         .navigation-links-container {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            height: 100vh;
            background-image: linear-gradient(to right, #F78100, #ff8400);
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;

        }

        .navigation-links-container .dashboard-owner-name {
            text-transform: uppercase;
            width: 100%;
            font-weight: 600;
            font-size: 20px;
            color: white;
            text-shadow: 1px 1px 3px black;
            text-decoration: none;

        }

        .navigation-links-container .links {
            text-decoration: none;
            color: white;
            font-size: 15px;
            padding: 5px;

        }

        .links-box {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .content-display-container {
            padding: 0;
            display: flex;
            justify-content: center;
            align-items:center;
            flex-wrap: wrap;
            height: 100vh;
            background-color: #fafafa;
        }

        .banner-img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .form {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            padding: 10px;
            width: 50%;
            height: 50%;
            background-color: white;
            display: flex;
            justify-content: center;
            flex-direction: column;
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


    </style>
</head>
<body>
      <!-- dashboard -->
      <div class="container-fluid">


<div class="row">

    <div class="col-md-4 col-lg-2 col-xl-2 col-sm-4 col-xs-4 navigation-links-container">
        <div class="icons">
        <a class="links" id="indicator" href="adminhome.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
            <a class="links" href="addcloth.php"><ion-icon name="refresh-outline"></ion-icon></a>
        </div>

        <h4 class="text-center dashboard-owner-name">WELCOME <?php echo $_SESSION["ANAME"]; ?></h4>

        <div class="links-box">

            <a class="btn links" href="adminprofile.php">PROFILE</a>
            <a class="btn links" href="userslist.php">USERS LIST</a>
            <a class="btn links" href="addproducts.php">FEED PRODUCTS</a>
            <a class="btn links" href="viewproducts.php">VIEW PRODUCTS</a>
            <a class="btn links" href="">EDIT PRODUCTS</a>
            <a class="btn links" href="addfabric.php">FEED FABRIC</a>
            <a class="btn links active" href="addcloth.php">FEED CLOTH</a>
            <a class="btn links" href="addsize.php">FEED SIZE</a>
            <a class="btn links" href="achangepass.php">CHANGE PASSWORD</a>
            <a class="btn links" href="adminlogout.php">LOGOUT</a>

        </div>
    </div>



    <div class="col-md-8 col-lg-10 col-xl-10 col-sm-8 col-xs-8 content-display-container">
        <form class="form text-center" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
            <h2 class="content-name">Load Your New Cloth</h2>
                <input type="text"placeholder="Enter Cloth Name" required name="name">
                <button type="submit" class="btn btn-success" name="submit">Feed Now</submit>
                </form>
                
</div>

   
</body>
<?php

if(isset($_POST["submit"]))
{
   
{
    $sql="INSERT INTO ccloth (CCLOTH) VALUES ('{$_POST["name"]}')";
    $db->query($sql);
    echo"<script>alert('Your New Cloth is successfully feeded...')</script>";
}
}


?>

</html>