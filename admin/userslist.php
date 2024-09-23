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

    <!-- googlefont poppins link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- font awesome cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-----ionicon link---->
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
            /* margin-top: 50px; */
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
            height: 100vh;
            background-color: #fafafa;
        }
       
        .table-headings{
        background-color:#ccc;
        color:black;
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
                    <a class="links" href="userslist.php"><ion-icon name="refresh-outline"></ion-icon></a>
                </div>

                <h4 class="text-center dashboard-owner-name">WELCOME <?php echo $_SESSION["ANAME"]; ?></h4>

                <div class="links-box">

                    <a class="btn links" href="adminprofile.php">PROFILE</a>
                    <a class="btn links active" href="userslist.php">USERS LIST</a>
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


            <div class="col-md-8 col-lg-10 col-xl-10 col-sm-8 col-xs-8 content-display-container">
            <table class="table text-center table-hover">

<tr class="table-headings">
     <th class="text-center">NAME</th>
     <th class="text-center">ID</th>
     <th class="text-center">GENDER</th>
     <th class="text-center">AGE</th>
     <th class="text-center">ADDRESS</th>
     <th class="text-center">PHONE</th>
     <th class="text-center">VIEW</th>
 </tr>
 <?php
 $sql="SELECT * FROM users";
 $res=$db->query($sql);
 if($res->num_rows>0)
 {
     while($row=$res->fetch_assoc())
     {
     $UID=$row["UID"];
     $NAME=$row["NAME"];
     $GENDER=$row["GENDER"];
     $AGE=$row["AGE"];
     $ADDRESS=$row["ADDRESS"];
     $PHONENO=$row["PHONENO"];

     echo"
          <tr>
          <td>$NAME</td>
          <td>$UID</td>
          <td>$GENDER</td>
          <td>$AGE</td>
          <td>$ADDRESS</td>
          <td>$PHONENO</td>
          <td><a href='userdetails.php?UID=$UID' class='btn btn-danger'>View more</a></td>
          </tr>
     
          ";

     }
   
 }
 ?>

</table>


            </div>
        </div>
    </div>

</body>
</html>



</body>
</html>
