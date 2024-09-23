<?php
//including connect file
include('includes/database.php');

//getting all products
function get_all_products()
{
  global $db;
  //condition to check isset or not
  if (!isset($_GET['size'])) {
    if (!isset($_GET['fabric'])) {
      if (!isset($_GET['cloth'])) {
        $select_query = "SELECT * FROM `cloths` order by rand()";
        $result_query = mysqli_query($db, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_id = $row['CID'];
          $product_title = $row['CNAME'];
          $product_keywords = $row['KEYWORDS'];
          $product_image = $row['FILE'];
          $product_price = $row['PRICE'];


          echo "<div class='col-sm-4 col-lg-3 col-md-3 text-center card'>
      <img src='./admin/cloth/$product_image' class='img-responsive img-thumbnail' style='width:250px; height:250px; object-fit:cover;' alt='...'>
      <h5 class='cname'>$product_title</h5>
      <p class='cprice'>Price: $product_price/-</p>
      <a href='displayall.php?add_to_cart=$product_id' 
      class='btn cart-btn'>Add to cart</a>
      <a href='product_details.php?CID=$product_id' 
      class='btn cart-btn'>View more</a>
      </div>";
        }
      }
    }
  }
}


//displaying sizes in navigationbar
function getsize()
{
  global $db;
  $sql = "SELECT * FROM `cloth_size`";
  $res = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    $size_title = $row['CSIZE_TITTLE'];
    $size_id = $row['CSIZE_ID'];
    echo "<li><a href= 'displayall.php?size=$size_title' class='nav-link text-light'>$size_title</a></li>";
  }
}

//getting unique sizes
function get_unique_sizes()
{
  global $db;
  //condition to check isset or not
  if (isset($_GET['size'])) {
    $size_name = $_GET['size'];
    $sql = "SELECT * FROM `cloths` where CSIZE='$size_name'";
    $res = mysqli_query($db, $sql);
    $num_of_rows = mysqli_num_rows($res);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No stock for this size</h2>";
    }
    while ($row = mysqli_fetch_assoc($res)) {
      $cid = $row['CID'];
      $cname = $row['CNAME'];
      $keywords = $row['KEYWORDS'];
      $file = $row['FILE'];
      $price = $row['PRICE'];

      echo "<div class='col-sm-4 col-lg-3 col-md-3 text=center card'>
<img src='./admin/cloth/$file' class='img-responsive img-thumbnail' style='width:250px; height:250px; object-fit:cover;' alt='...'>
<h5 class='cname'>$cname</h5>
<p class='cprice'>Price: $price/-</p>
<a href='displayall.php?add_to_cart=$cid' 
class='btn cart-btn'>Add to cart</a>
<a href='product_details.php?CID=$cid' 
class='btn cart-btn'>View more</a>
</div>";;
    }
  }
}



//displaying fabric in navigationbar
function getfabric()
{
  global $db;
  $sql = "SELECT * FROM `cloth_fabric`";
  $res = mysqli_query($db, $sql);
  //$row_data=mysqli_fetch_assoc($result_brands);
  //echo $row_data['brand_title'];
  //echo $row_data['brand_title'];
  while ($row = mysqli_fetch_assoc($res)) {
    $fabric_title = $row['CFABRIC_TITTLE'];
    $fabric_id = $row['CFABRIC_ID'];
    echo "<li><a href= 'displayall.php?fabric=$fabric_title'>$fabric_title</a></li>";
  }
}
//getting unique brands
function get_unique_fabrics()
{
  global $db;
  //condition to check isset or not
  if (isset($_GET['fabric'])) {
    $fabric_name = $_GET['fabric'];
    $sql = "SELECT * FROM `cloths` where CFABRIC_TYP='$fabric_name'";
    $res = mysqli_query($db, $sql);
    $num_of_rows = mysqli_num_rows($res);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No stock for this Fabric</h2>";
    }

    while ($row = $res->fetch_assoc()) {
      $product_id = $row['CID'];
      $product_title = $row['CNAME'];
      $product_keywords = $row['KEYWORDS'];
      $file = $row['FILE'];
      $product_price = $row['PRICE'];

      echo "<div class='col-sm-4 col-lg-3 col-md-3 text=center card'>
  <img src='./admin/cloth/$file'class='img-responsive img-thumbnail' style='width:250px; height:250px; object-fit:cover;' alt='...'>
  <h5 class='cname'>$product_title</h5>
  <p class='cprice'>Price: $product_price/-</p>
  <a href='displayall.php?add_to_cart=$product_id' 
    class='btn cart-btn'>Add to cart</a>
  <a href='product_details.php?CID=$product_id' 
    class='btn cart-btn'>View more</a>
  </div>";
    }
  }
}



//displaying cloths in sidenav
function getcloths()
{
  global $db;
  $select_brands = "SELECT * FROM `ccloth`";
  $result_brands = mysqli_query($db, $select_brands);
  //$row_data=mysqli_fetch_assoc($result_brands);
  //echo $row_data['brand_title'];
  //echo $row_data['brand_title'];
  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['CCLOTH'];
    $brand_id = $row_data['CCLOTH_ID'];
    echo "<li><a href= 'displayall.php?cloth=$brand_title'>$brand_title</a></li>";
  }
}
//getting unique brands
function get_unique_cloths()
{
  global $db;
  //condition to check isset or not
  if (isset($_GET['cloth'])) {
    $brand_t = $_GET['cloth'];
    $select_query = "SELECT * FROM `cloths` where CCLOTH='$brand_t'";
    $result_query = mysqli_query($db, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No stock for this Cloth</h2>";
    }
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['CID'];
      $product_title = $row['CNAME'];
      $product_keywords = $row['KEYWORDS'];
      $file = $row['FILE'];
      $product_price = $row['PRICE'];

      echo "<div class='col-sm-4 col-lg-3 col-md-3 text=center card'>
  <img src='./admin/cloth/$file'class='img-responsive img-thumbnail' style='width:250px; height:250px; object-fit:cover;' alt='...'>
  <h5 class='cname'>$product_title</h5>
  <p class='cprice'>Price: $product_price/-</p>
  <a href='displayall.php?add_to_cart=$product_id' 
    class='btn cart-btn'>Add to cart</a>
  <a href='product_details.php?CID=$product_id' 
    class='btn cart-btn'>View more</a>
  </div>
";
    }
  }
}

//get searching products

function search_products()
{
  global $db;
  if (isset($_POST['search-btn'])) {
    $search_data_value = $_POST['search'];

    $search_query = "SELECT * FROM `cloths` where KEYWORDS like
 '%$search_data_value%' or CNAME like '%$search_data_value%' or CFABRIC_TYP like '%$search_data_value%' or CSIZE like '%$search_data_value%'";
    $res = $db->query($search_query);
    $num_of_rows = mysqli_num_rows($res);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'> no result match.No 
  products for this category!</h2>";
    }
    while ($row = mysqli_fetch_assoc($res)) {
      $product_id = $row['CID'];
      $product_title = $row['CNAME'];
      $product_keywords = $row['KEYWORDS'];
      $file = $row['FILE'];
      $product_price = $row['PRICE'];

      echo "<div class='col-sm-4 col-lg-3 col-md-3 text=center card'>
    <img src='./admin/cloth/$file'class='img-responsive img-thumbnail' style='width:250px; height:250px; object-fit:cover;' alt='...'>
    <h5 class='cname'>$product_title</h5>
    <p class='cprice'>Price: $product_price/-</p>
    <a href='displayall.php?add_to_cart=$product_id' 
      class='btn cart-btn'>Add to cart</a>
    <a href='product_details.php?CID=$product_id' 
      class='btn cart-btn'>View more</a>
    </div>";
    }
  }
}


//cart function
function cart()
{
  if (isset($_GET['add_to_cart'])) {
    global $db;

    $UID = $_SESSION["UID"];
    $cid = $_GET['add_to_cart'];
    $sql = "SELECT * FROM `cart` where 
    UID='$UID' and CID=$cid";
    //$result_query=mysqli_query($db,$select_query);
    $res = $db->query($sql);
    //$num_of_rows=mysqli_num_rows($res);
    if ($res->num_rows > 0) {
      echo "<script>alert('This item is already present inside cart')
    </script>";
      echo "<script> window.open('displayall.php','_self')</script>";
    } else {

      global $db;
      $UID = $_SESSION["UID"];
      $cid = $_GET['add_to_cart'];
      $sql = "SELECT * FROM cloths WHERE CID=$cid";
      $res = $db->query($sql);
      if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $name = $row["CNAME"];
        $fabric = $row["CFABRIC_TYP"];
        $size = $row["CSIZE"];
        $price = $row["PRICE"];
        $img = $row["FILE"];

        $sql = "INSERT INTO cart (CID,CNAME,FABRIC,SIZE,FILE,PRICE,UID,QTY) VALUES ('$cid','$name','$fabric','$size','$img','$price','$UID','1')";
        $result_query = mysqli_query($db, $sql);
        echo "<script>alert('Item is added to cart')</script>";
        echo "<script> window.open('displayall.php','_self')</script>";
      }
    }
  }
}



//function to get cart item numbers
function cart_item()
{
  if (isset($_GET['add_to_cart'])) {
    global $db;

    $UID = $_SESSION["UID"];
    $sql1 = "SELECT * FROM `cart` where 
    UID='$UID'";
    $res = mysqli_query($db, $sql1);
    $count = mysqli_num_rows($res);
  } else {
    global $db;

    $UID = $_SESSION["UID"];
    $sql2 = "SELECT * FROM `cart` where 
    UID='$UID'";
    $res = mysqli_query($db, $sql2);
    $count = mysqli_num_rows($res);
  }
  echo $count;
}
