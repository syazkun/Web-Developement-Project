<?php 
session_start();
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password == $cpassword) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if (!$result){
                echo '<script>alert("Huh? Something went wrong!")</script>';
            } 
            echo '<script>alert("Register Successfully")</script>';
            header("location:login.php");
        }else {
            echo '<script>alert("Password Not Macthed")</script>';
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 500;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" id="" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" id="" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="" value="<?php echo $password; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" id="" value="<?php echo $cpassword ; ?>" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Register</button>
            </div>
            <p class="login-register-text">Don't you have an account? <a href="login.html">Login here</a></p>
        </form>
    </div>


</body>
</html>