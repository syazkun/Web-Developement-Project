<?php 
session_start();
include 'config.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    // $username=$_POST["username"];
    // $password=$_POST["password"];
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    // $sql="SELECT * from users WHERE username'".$username."' AND password'".$password."'";
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       $_SESSION['login_user'] = $username;
       
       header("location:/Web-Developement-Project/home.html");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }
?>

<!-- //     $result=mysqli_query($conn,$sql);
//     if(!$result){
//         die("ERROR".mysqli_error($connection));
//     }

//     $row=mysqli_fetch_array($result);

//     if($row["role"]=="admin")
//     {
//         header("location:Heavenly-Chocolate-Cake.html");
//         echo "admin";
//     } 
//     else 
//     {
//         header("location:home.html");
//         echo "user";
//     }
// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email" >
            <p class="login-text" style="font-size: 2rem; font-weight: 500;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" id="" value="<?php echo $username; ?>"required>
            </div>
            <!-- <div class="input-group">
                <input type="email" placeholder="Email" name="email" id="" required>
            </div> -->
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="" value="<?php echo $password; ?>"required>
            </div>
            <div class="input-group">
                <button class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't you have an account? <a href="register.html">Register here</a></p>
        </form>
    </div>
    
</body>
</html>