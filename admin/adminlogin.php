<?php
session_start();
include ("../includes/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <style>
        *{
    margin: 0%;
    padding: 0%;
}
body{
    background-image: url(data:image/jpeg;base64,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);
    background-repeat: no-repeat;
    background-size: cover;  
}
.bg{
    height: 100vh;
    text-align: center;
    display: flex;
    /* flex-grow: 1;
    flex-shrink: 1;
    flex-basis: 0; */
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    flex: minmax(100px 1fr);
}
.right h2{
    padding-top: 2px
}

.right input{
    margin-bottom: 20px;
    padding: 5px;
    border-left: 4px solid purple;
}
.left p{
    text-align: justify;
}
.left{
     
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzGbg5la8s4lsILya2Fu8QjA8l_ct84KEPULnal9OguX6dwDrONftOm3uL24avLnOAk08&usqp=CAU);
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    color: white;
    border-radius: 10px 0 0 10px;
    display: inline-block;
    width: 400px;
    height: 330px;
    padding: 10px;
    padding-top: 100px; 
    
}
.right{
    position: relative;
    display: flex;
    width: 420px;
    height: 370px;
    border-radius: 0 10px 10px 0;
    background-color: white;
    display: inline-block;
    padding-top: 70px;
    
}
button:hover{
    cursor: pointer;
}
.right input:hover{
    box-shadow: 0 0 10px 0;
}
.error{
    color: red;
}
.success{
    color: green;
}
.left-icon{
    color: purple;
    position: absolute;
    left: 0;
    top:0;
}

    </style>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="bg">
         
    <div class="left">
        <center style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
        <h4>Nice to see you again</h4>
        <h1>WELCOME BACK</h1>
        <h1>_________</h1>
        <p> Paru's Fashion is a high-end clothing store that offers everything from casual basics to luxurious statement pieces. If you’re looking for an elegant yet bold look, this is your go-to spot for quality pieces that will stand out.</p>
        </center>
        </div>
    <div class="right">
    <a href="../index.php" class="left-icon" ><ion-icon name="arrow-back-outline"></ion-icon></a>
        <center>
            <form action="adminlogin.php" method="POST">
        <h1 style="margin-bottom: 20px; color: purple; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            Login Account</h1>
            <?php
              
              if(isset($_POST["submit"]))
              {
               $sql="SELECT * FROM `admin` where AMAIL='{$_POST["adminemail"]}' and APASS='{$_POST["adminpassword"]}'";
               $res=$db->query($sql);
               if($res->num_rows>0)
               {  
                   $row=$res->fetch_assoc();
                   $_SESSION["AID"]=$row["AID"];
                   $_SESSION["ANAME"]=$row["ANAME"];
                   $_SESSION["AMAIL"]=$row["AMAIL"];
                  //header("location:./admin/adminhome.php");
                echo"<script>window.open('adminhome.php','_self')</script>";
                }
               else
               {
                   echo "<p class='error'>invalid user details</P>";
               }
              }
           
            ?>

        <label for="email"></label>   
        <input type="email" name="adminemail" id="email" placeholder="Email id" required><br>
        <input type="password" name="adminpassword" placeholder="password" minlength="7" required><br>
      <button style="padding: 0px 40px; border-radius: 5px; background-color: purple; color: white;" type="submit" name="submit">
            Subscribe</button> <br>
            <h3>__________</h3>
        </center>
    </form>
    </div>
    </div>
    
</body>
</html>