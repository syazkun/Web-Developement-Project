  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>




  <?php

$server = "localhost";
$username = "root";
$password = "";
$database = "adminpanel";
$connection = mysqli_connect($server,$username,$password,$database);

if(isset($_POST['btnAdd']))
{
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

        $query = "INSERT INTO managecake (name,branch,price,quantity) VALUES ('$$name','$branch','$price','$quantity)";
        $query_run = mysqli_query($connection, $query);
}
    
//         if($query_run)
//         {
//             echo "done";
//             $_SESSION['success'] =  "Admin is Added Successfully";
//             header('Location: register.php');
//         }
//         else 
//         {
//             echo "not done";
//             $_SESSION['status'] =  "Admin is Not Added";
//             header('Location: register.php');
//         }
//     }
//     else 
//     {
//         echo "pass no match";
//         $_SESSION['status'] =  "Password and Confirm Password Does not Match";
//         header('Location: register.php');
//     }

// }

?>