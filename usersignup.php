<?php
session_start();
include "includes/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css\login-signup.css">

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


  <title>SIGNUP</title>
</head>

<body>


  <img class="img" src="page images/index-register-login.jpg">

  <a href="userlogin.php" class="left-icon"><ion-icon name="arrow-back-outline"></ion-icon></a>
  <div class="container-fluid main-box">
    <h2 class="title1">WELCOME TO <span>PARU'S FASHION</span></h2>
    <h3 class="title2">EXPLORE WORLD</h3>

    <h1 class="text-center login-name">
      Create Account</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="form" onsubmit="return validateForm()">
      <?php
      if (isset($_POST["submit"])) {

        $RAND = mt_rand();
        $sql = "INSERT INTO users (UID,IMG,NAME,GENDER,AGE,ADDRESS,PHONENO,EMAIL,PASS) VALUES ('$RAND','./users/blankdp.jpg','{$_POST["name"]}','','','','','{$_POST["email"]}','{$_POST["password"]}')";
        $db->query($sql);
        echo "<p class='success'>User Registration success.</p>";
      }
      ?>
      <input class="name" type="text" id="name" name="name" placeholder="User Name"><br>
      <input class="email" type="email" id="email" name="email" placeholder="Enter Email"><br>
      <div>
        <input class="password" type="password" id="password" name="password" placeholder="Password" minlength="3">
      </div>
      <button class='btn button' type="submit" name="submit">Register</button><br>
      <p>Already have an account? <a href="userlogin.php" class="su">Sign in</a></p>
    </form>


  </div>




  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      // Name validation
      if (name.trim() == "") {
        alert("Please enter your name");
        return false;
      }

      // Email validation
      var emailExpression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailExpression.test(email)) {
        alert("Please enter a valid email address");
        return false;
      }

      // Password length validation
      if (password.length < 8) {
        alert("Password must be at least 8 characters long");
        return false;
      }

      // Form is valid
      return true;
    }
  </script>
</body>

</html>