<?php
session_start();
include('../includes/database.php');


if (!isset($_SESSION["AID"])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!---bootstrap css link----->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!---google font-poppins link---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!---ionicon link--->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
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
            width: 70%;
            height: 70%;
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

        .form input {
            outline: none;
            padding: 5px 10px;
            margin-bottom: 20px;
            align-self: center;
            width: 50%;
        }

        .form button {
            border: 1px solid #F78100;
            font-weight: 700;
            width: fit-content;
            align-self: center;
            color: orange;
            background-color: whitesmoke;
            transition: 0.3s;
        }

        .form button:hover {
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
                    <a class="links" href="achangepass.php"><ion-icon name="refresh-outline"></ion-icon></a>
                </div>
                
                <h4 class="text-center dashboard-owner-name">WELCOME <?php echo $_SESSION["ANAME"]; ?></h4>

                <div class="links-box">

                    <a class="btn links" href="adminprofile.php">PROFILE</a>
                    <a class="btn links" href="userslist.php">USERS LIST</a>
                    <a class="btn links" href="addproducts.php">FEED PRODUCTS</a>
                    <a class="btn links" href="viewproducts.php">VIEW PRODUCTS</a>
                    <a class="btn links" href="">EDIT PRODUCTS</a>
                    <a class="btn links" href="addfabric.php">FEED FABRIC</a>
                    <a class="btn links" href="addcloth.php">FEED CLOTH</a>
                    <a class="btn links" href="addsize.php">FEED SIZE</a>
                    <a class="btn links active" href="achangepass.php">CHANGE PASSWORD</a>
                    <a class="btn links" href="adminlogout.php">LOGOUT</a>

                </div>
            </div>


            <div class="col-md-8 col-lg-10 col-xl-10 col-sm-8 col-xs-8 content-display-container">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="form text-center">

                    <h2 class="content-name">Change Your Password</h2>


                    <input type="text" placeholder="Old Password" name="opass" required>
                    <input type="text" placeholder="Enter New Password" name="npass" required>
                    <input type="password" placeholder="Confirm Password" name="cnpass" required>
                    <button type="submit" name="submit" class="btn btn-success button" style="width:fit-content;">Change</button>



                </form>



            </div>
        </div>
    </div>



    <?php



    if (isset($_POST["submit"])) {
        global $db;
        $AID = $_SESSION["AID"];
        $opass = $_POST["opass"];
        $npass = $_POST["npass"];
        $cnpass = $_POST["cnpass"];
        $sql = "SELECT * FROM admin WHERE APASS='$opass' AND AID='$AID'";
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
            if ($npass == $cnpass) {
                $s = "UPDATE admin SET APASS='$npass' WHERE AID='$AID'";
                $db->query($s);
                echo "<script>alert('Password has been changed succesfully.')</script></p>";
            } else {
                echo  "<script>alert('Password doesn't match')</script></p>";
            }
        } else {
            echo  "<script>alert('Invalid Password')</script></p>";
        }
    }


    ?>


    <!-----bootstrap Js link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>