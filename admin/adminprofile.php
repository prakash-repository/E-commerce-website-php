<?php
session_start();
include("../includes/database.php");

if (!isset($_SESSION["AID"])) {
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
            align-items: center;
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
            height: 80%;
            background-color: white;
            display: flex;
            justify-content: center;
            flex-direction: column;
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

        .form input,
        select {
            outline: none;
            padding: 5px 10px;
            margin-bottom: 20px;
            align-self: center;
            width: 50%;
        }

        .file-change-options{
        position:relative;
     
        display:flex;
        justify-content:center;
    }
    .file-change-options input{
 
        margin:0!important;
        padding:10px 0px!important;
    }
    .file-change-options button{
        position:absolute;
        top:3px;
        right:0;
        

    }
        .cart-btn {
            border: 1px solid #F78100;
            font-weight: 700;
            width: fit-content;
            align-self: center;
            color: orange;
            background-color: whitesmoke;
            transition: 0.3s;
        }

        .cart-btn:hover {
            border: 1px solid #fff;
            color: white;
            background-color: orange;
            transition: 0.3s;
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
                    <a class="links" href="adminprofile.php"><ion-icon name="refresh-outline"></ion-icon></a>
                </div>

                <h4 class="text-center dashboard-owner-name">WELCOME <?php echo $_SESSION["ANAME"]; ?></h4>

                <div class="links-box">

                    <a class="btn links active" href="adminprofile.php">PROFILE</a>
                    <a class="btn links" href="userslist.php">USERS LIST</a>
                    <a class="btn links" href="addproducts.php">FEED PRODUCTS</a>
                    <a class="btn links" href="viewproducts.php">VIEW PRODUCTS</a>
                    <a class="btn links" href="">EDIT PRODUCTS</a>
                    <a class="btn links" href="addfabric.php">FEED FABRIC</a>
                    <a class="btn links" href="addcloth.php">FEED CLOTH</a>
                    <a class="btn links" href="addsize.php">FEED SIZE</a>
                    <a class="btn links" href="achangepass.php">CHANGE PASSWORD</a>
                    <a class="btn links" href="adminlogout.php">LOGOUT</a>

                </div>
            </div>

            <?php
                $sql="SELECT * FROM admin WHERE AID='{$_SESSION["AID"]}'";
                $res=$db->query($sql);
                $row=$res->fetch_assoc();
                $i=$row["IMG"];
                $na=$row["ANAME"];
                $g=$row["GENDER"];
                $a=$row["AGE"];
                $ad=$row["ADDRESS"];
                $ph=$row["PHONENO"];
                ?>

            <div class="col-md-8 col-lg-10 col-xl-10 col-sm-8 col-xs-8 content-display-container">
                <form class="form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">


                    <img src="<?php  echo($i!='')?$i:'../users/nodp.jpg'?>?>" alt="NO DP" style="width:100px; height:100px; border-radius:50%; object-fit:cover;align-self:center;">
                    <div class="file-change-options">
                    <input type="file" name="img" value="<?php echo $i ?>"><button class="btn btn-success" name="change">change</button>
    </div>
                    <input type="text" value="<?php echo $na ?>" placeholder="Enter Your Name" name="name">
                    <input type="text" value="<?php echo $g ?>" placeholder="Enter Your Gender" name="gender">
                    <input type="number" value="<?php echo $a ?>" placeholder="Enter Your Age" name="age">
                    <input type="text" value="<?php echo $ad ?>" placeholder="Enter Your Address" name="address">
                    <input type="number" value="<?php echo $ph ?>" placeholder="Enter Your Mobileno" name="mobile">
                    <input type="submit" value="UPDATE" name="submit" class="btn btn-success cart-btn">


                </form>



            </div>


</body>
<?php


if(isset($_POST["change"]))
{
    {
    $AID=$_SESSION["AID"];
    $target="";
    $target_file=$target.basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);

    $s2="UPDATE admin SET IMG='$target_file' WHERE AID='$AID'";
    $db->query($s2);
    echo"<script>alert('Profile picture has been changed...')</script>";
}
}
elseif (isset($_POST["submit"])) {

    {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $AID = $_SESSION["AID"];

        $s = "UPDATE admin SET ANAME='$name',GENDER='$gender',AGE='$age',ADDRESS='$address',PHONENO='$mobile' WHERE AID='$AID'";
        $db->query($s);
        echo "<script>alert('Profile Updated...')</script>";
    }
}





?>

</html>