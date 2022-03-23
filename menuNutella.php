<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="./this.css"> 
  <title>Order | Butterscotch Cake</title> 
  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  <script src="script.js"></script> 
</head> 
 
<body> 
  <!-- Headers --> 
  <section class="header"> 
    <nav> 
      <a href=""><img src="./assets/logo2.png" alt="logo1.png" id="logo"></a> 
      <div class="nav-links" id="nav-links"> 
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="home.php #Menu">Menu</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="login/login.php">Log out</a></li>
        </ul>
      </div> 
    </nav> 
    <!--test menu--> 
    <form action="" method="POST">
      <div class="table"> 
        <div class="left-column"> 
          <img data-image="black" src="./Assets/tart.jpg" alt=""> 
        </div> 
        <?php 
        $connection = mysqli_connect("localhost", "root", "", "adminpanel"); 
        $query = "SELECT * FROM managecake WHERE id = '10'"; 
        $query_run = mysqli_query($connection, $query); 
        if (mysqli_num_rows($query_run) > 0) { 
          while ($row = mysqli_fetch_assoc($query_run)) { 
        ?> 
 
            <div class="right-column"> 
 
              <div class="product-description"> 
 
                <h1><?php echo $row['name']; ?></h1> 
                <p>This tart is made with a soft and delicious whip of mascarpone cheese and luxurious Nutella. Best of all, it is entirely gluten-free thanks to the almond flour, which perfectly complements those hazelnut chocolate spread.</p> 
 
              </div> 
 
 
              <div class="product-configuration"> 
 
                <div class="cable-config"> 
                  <span>Outlet :</span> 
 
 
 
 
                  <div class="cable-choose"> 
                    <form action="" method="POST"> 
                    <button type="submit"  name="setiabtn" style="margin: 10px;">Setia Alam City Mall</button> 
                    </form> 
                    <form action="" method="POST"> 
                    <button type="submit"  name="saccbtn"  style="margin: 10px;">SACC Mall Shah Alam</button> 
                    </form> 
                    <form action="" method="POST"> 
                    <button type="submit"  name="aeonbtn" style="margin: 10px;">AEON Shah Alam</button> 
                    </form> 
                  </div> 
                  <?php 
if (isset($_POST['setiabtn'])){ 
$connection = mysqli_connect("localhost", "root", "", "adminpanel"); 
$query = "SELECT * FROM managecake WHERE id='10'"; 
$query_run = mysqli_query($connection, $query); 
 
if($query_run) 
{ 
    while($row = mysqli_fetch_array($query_run)) 
    { 
      echo "<div class=stock> 
      <span>stock available :  $row[quantity]  </span> 
      <div class=product-price><span>RM $row[price]</span> 
      <div class=quantity buttons_added> 
        <input type='text' step='1' min='1' max='$row[quantity]'  value='1' title='Qty' class='input-text qty text'  inputmode=''> 
      </div> 
 
    </div>";} 
} 
else 
{ 
    echo "No record found"; 
} 
} 
?> 
 
 
<?php 
if (isset($_POST['saccbtn'])){ 
$connection = mysqli_connect("localhost", "root", "", "adminpanel"); 
$query = "SELECT * FROM managecake WHERE id='11'"; 
$query_run = mysqli_query($connection, $query); 
 
if($query_run) 
{ 
  while($row = mysqli_fetch_array($query_run)) 
  { 
    echo "<div class=stock> 
    <span>stock available :  $row[quantity]  </span> 
    <div class=product-price><span>RM $row[price]</span> 
    <div class=quantity buttons_added> 
      <input type='text' step='1' min='1' max='$row[quantity]'  value='1' title='Qty'
class='input-text qty text'  inputmode=''> 
    </div> 
 
  </div>";} 
} 
else 
{ 
    echo "No record found"; 
} 
} 
?> 
<?php 
if (isset($_POST['aeonbtn'])){ 
$connection = mysqli_connect("localhost", "root", "", "adminpanel"); 
$query = "SELECT * FROM managecake WHERE id='12'"; 
$query_run = mysqli_query($connection, $query); 
 
if($query_run) 
{ 
  while($row = mysqli_fetch_array($query_run)) 
  { 
    echo "<div class=stock> 
    <span>stock available :  $row[quantity]  </span> 
    <div class=product-price><span>RM $row[price]</span> 
    <div class=quantity buttons_added> 
      <input type='text' step='1' min='1' max='$row[quantity]'  value='1' title='Qty' class='input-text qty text'  inputmode=''> 
    </div> 
 
  </div>";} 
} 
else 
{ 
    echo "No record found"; 
} 
} 
?> 
                </div> 
              </div> 
 
             
              <br> 
              <br> 
              <div class="buy-now">
                <a href="check out.html" class="cart-btn"><input type="button" value="Buy Now"></a>
              </div>
          <?php 
          } 
        } else { 
          echo "no record found"; 
        } 
          ?> 
            </div> 
      </div> 
      </form>
  </section> 

</body> 
 
</html> 
<?php  
include 'ajax.js'; 
?>