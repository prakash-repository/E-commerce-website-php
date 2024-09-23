<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANKS</title>
       <!---bootstrap css link----->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-----bootstrap Js link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-----ionicon link---->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            padding:0;
            margin:0;
        }
        .maindiv{
            display:flex;
            flex-direction:column;
            justify-content: center;
            align-items:center;
            position:relative;
            background-image:linear-gradient(to right,#228B22,#32CD32);
            width:100vw;
            height:100vh;
        }
        .content{
            background-image: linear-gradient(to right,#228B22,#32cd37);
            box-shadow:0px 0px 10px 5px whitesmoke;
            padding:20px;
        }
        h2,h3,h4{
            color:white;
            font-family:poppins;
            text-shadow:3px 3px grey;
        }
        .buttons{
            margin:10px;
        color:green;
        background-color:whitesmoke;
        transition:0.3s;
        }
        .buttons:hover{
        color:white;
        background-color:green;
        transition:0.3s;
        }
      
       

    </style>
</head>
<body>
    <div class="container-fluid maindiv" id="maindiv">

<div class="text-center content">
    <h2>Hooray!!!</h2>
    <h3>Congratulations. Your order has been placed successfully</h3>
    <h4>Your Order Invoice Number:   <b><?php echo $_GET['i']?></b></h4>
    <div>
    <button class="btn buttons" id="btn1">View Bill</button>
    <button class="btn buttons" id="btn2">Explore</button>
    </div>

</div>
    </div>

 <!-----bootstrap Js link---->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
    //summa js la panna epdi irukko nu paathan...

    let button1=document.getElementById("btn1");
    let button2=document.getElementById("btn2");

    button1.addEventListener("click",()=>{
    window.open("../bill.php","_self");
    })

    button2.addEventListener("click",()=>{
    window.open("../displayall.php","_self");
    })

    </script>

</body>
</html>