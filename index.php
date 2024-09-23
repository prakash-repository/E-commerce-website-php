<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INDEX</title>

    
    <!-- bootstrap css link -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- googlefont poppins link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- font awesome cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* poppins link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
        .main-box {
            position: absolute;
            top: 150px;
            left:20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .title1{
font-size:25px;
font-weight:800;
    text-shadow:1px 1px 1px #fafafa;
}
.title1 span{
    color:#F78100;
    text-shadow:1px 1px 1px #fafafa;
}
.title2{
    font-weight:600;
    text-shadow:1px 1px 1px #fafafa;
}
        
        .links{
            font-size:18px;
            margin-top:20px;
            margin-bottom:20px;
            font-weight:600;
            color: #F78100;
            text-decoration: none;
            transition:0.1s linear all;
        }
        .links:hover{
            color: #F78100;
            text-shadow:1px 1px 1px white;
            text-decoration: none;
            transform:scale(1.2);
            transition:0.1s linear all;
        }
        
        .img {
            position: relative;
            width: 100%;
            height: 99vh;
        }
    </style>
</head>

<body>


    <img class="img" src="page images/index-register-login.jpg" >
   

    <div class="container-fluid main-box">
        <h1 class="title1">WELCOME TO <span>PARU'S FASHION</span></h1>
        <h3 class="title2">EXPLORE WORLD</h3>

       
            <a href="./admin/adminlogin.php" class="links">ADMIN</a>
        
        <h4>(or)</h4>
       
            <a href="userlogin.php" class="links">USER</a>
        
    </div>
</body>

</html>