<?php
session_start();
include('includes/database.php');
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
    <title>BILL</title>
    
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
/*searchbar style */
.form{
        width:fit-content;
        position:relative;
    }
    .searchbar{
        width:200px;
        outline:none;
        padding-left:10px;
    }
    .search-btn{
        padding:0;
        padding:4px;
        border:none;
        background-color:transparent;
        position:absolute;
        right:0;    
    }
   
      
        .link{
            font-family:roboto;
            font-size:17px;
            color:black;
            
        }
        .link:hover{
            text-shadow: 1px 1px white;
            color:#ff1515;
        }
        .table-box{
            display:flex;
            justify-content: center;
            align-items:center;
            
        }
        .welcome{
            color:#F78100;
            font-weight:800;
            text-shadow:0px 0px 1px grey;
        }
        .table-headings{
            color:white;
            background-color:#F78100;
        }
        .table-headings:hover{
            background-color:#F78100!important;

        }
       
        .print{
            color:grey;
            text-decoration:none;
        }
        .print:hover{
            text-decoration:none;
            cursor:pointer;
        }
   

        
     </style>
</head>
<body>
<div class="container-fluid page">
        <div class="row">
        <a class="link" id="indicator" href="userdashboard.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="form">
            <input type="number" class="searchbar" placeholder="Enter Invoice Number" min="0" name="invoiceno" required>
            <button type="submit" class="btn search-btn" name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 box">

        <div class="table-reponsive">
            <table class="table table-condensed table-box">
                <h2 class="text-center welcome">WELCOME TO PARU'S FASHION</h2>
                <tr class="table-headings">
                <th>NAME</th>
                <th>FABRIC</th>
                <th>SIZE</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>TOTAL</th>
                
                </tr>
            <?php
            if(isset($_POST["submit"]))
            {
                $INVOICENO=$_POST["invoiceno"];
            $sql="SELECT * FROM orders WHERE UID='{$_SESSION["UID"]}' AND INVOICENO='{$_POST["invoiceno"]}'";
            $res=$db->query($sql);
            if($res->num_rows>0)
            {
            while( $row=$res->fetch_assoc())
            {
                //$NAME=$_SESSION["NAME"];
               // $PH=$_SESSION["PHONENO"];

            $CNAME=$row["CNAME"];
            $FABRIC=$row["FABRIC"];
            $SIZE=$row["SIZE"];
            $ADDRESS=$row["ADDRESS"];
            $PRICE=$row["PRICE"];
            $QTY=$row["QTY"];
            $GT=$row["GRANDTOTAL"];
            $METHOD=$row["METHOD"];
            $time=$row["LOG"];
            $TIME=date("d/m/Y",strtotime($time));
            $t=$PRICE*$QTY;
            //$SUMQTY=array_sum($row["QTY"]);
                
                echo"<tr>
                 <td>$CNAME</td>
                <td>$FABRIC</td>
                <td>$SIZE</td>
                <td>$PRICE</td>
                <td>$QTY</td>
                <td>$t</td>
                </tr>";
            }
            $u="SELECT * FROM users WHERE UID='{$_SESSION["UID"]}'";
            $res=$db->query($u);
            $row=$res->fetch_assoc();
            $NAME=$row["NAME"];$ADDRESS=$row["ADDRESS"];
            $PH=$row["PHONENO"];

            }
            else
                {
                  error_reporting(0);
                  echo "WRONG INVOICE NUMBER";

                }
            echo" 

                    <tr>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>GRANDTOTAL</th>
                    <td><b>$GT</b></td>
   
                    </tr>

                 <tr>
                    
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th>PAYMENT METHOD</th>
                 <td><b>$METHOD</b></td>

                 </tr>
       
                    <tr>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>DATE</th>
                    <td><b>$TIME</b></td>
   
                    </tr>
                    
                    <tr>
                    
                    <th>CUSTOMER NAME</th>
                    <td><b>$NAME</b></td>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    </tr>

                    <tr>
                    
                    <th>INVOICE NO</th>
                    <td><b>$INVOICENO</b></td>
                    <th></th>
                    <th></th>
                    <th></th>
                    
   
                    </tr>

                    <tr>
                    
                    <th>ADDRESS</th>
                    <td colspan='5'><b>$ADDRESS</b></td>
                    <th></th>
                    <th></th>
                   
                    
   
                    </tr>
                    
                    <tr>
                    
                    <th>PHONE NO</th>
                    <td colspan='3'><b>$PH</b></td>
                    <th></th>
                    <th></th>
                    <th></th>
                    
   
                    </tr>
                    
                    <tr>
                    
                    <td></td>
                    <th colspan='2'>THANKYOU FOR SHOPPING!</th>
                    <td></td>
                    <td></td>

                    </tr>

                    <tr>

                    <td></td>
                    <td colspan='2'><a class='print' onclick='prt()'> by:-  Paru's fashion.com</a></td>
                    <td></td>
                    <td></td>
                       
                    </tr>";
                }
                ?>
                  
        </table>
            
     
                
        </div>
        </div>

      
        </div>
    </div>
   
    

<script>
function prt(){
     window.print();
     }
</script>


</body>



</html>