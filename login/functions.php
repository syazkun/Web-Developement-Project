<?php
session_start();
include 'config.php';

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("location: login.html");
    die;
}




error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    if ($password == $cpassword) {
        $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo '<script>alert("Huh? Something went wrong!")</script>';
        }
        echo '<script>alert("Register Successfully")</script>';
        header("location:login.html");
    } else {
        echo '<script>alert("Password Not Macthed")</script>';
    }
}






if (isset($_POST['submit1'])) {
    // $username=$_POST["username"];
    // $password=$_POST["password"];
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $timeout = time();

    // $sql="SELECT * from users WHERE username'".$username."' AND password'".$password."'";
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);


    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        if ($row["role"] == "admin") {
            header("location:/testa/Web-Developement-Project/admin/cake_register.php");
        } else {
            header("location: /testa/Web-Developement-Project/Home.php");
        }
    } else {
        echo '<script>alert("Your Login Name or Password is invalid")</script>';
        header('Refresh: 1; URL = login.html');
    }

    try {
        if (file_exists("Web-Developement-Project/Home.php")) {
        } else {
            throw new Exception('Page Not Found');
        }
    } catch (Exception) {
    }
}

if (isset($_POST['pay-btn'])) {
    // $username=$_POST["username"];
    // $password=$_POST["password"];
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $timeout = time();

    // $sql="SELECT * from users WHERE username'".$username."' AND password'".$password."'";
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);


    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        if ($row["role"] == "admin") {
            header("location:/testa/Web-Developement-Project/admin/cake_register.php");
        } else {
            header("location: /testa/Web-Developement-Project/Home.php");
        }
    } else {
        echo '<script>alert("Your Login Name or Password is invalid")</script>';
    }

    try {
        if (file_exists("Web-Developement-Project/Home.php")) {
        } else {
            throw new Exception('Page Not Found');
        }
    } catch (Exception) {
    }
}





    // $result=mysqli_query($conn,$sql);
    // if(!$result){
    //     die("ERROR".mysqli_error($connection));
    // }

    // $row=mysqli_fetch_array($result);

    // if($row["role"]=="admin")
    // {
    //     header("location:/admin/cake_register.php");
    //     echo "admin";
    // } 
    // else 
    // {
    //     header("location:home.html");
    //     echo "user";
    // }




?>

<?php

if (isset($_POST['paybtn'])) {

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $name = $_POST['name'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $ccv = $_POST['ccv'];

    $connection = mysqli_connect("localhost","root","","adminpanel");
        $sql = "INSERT INTO paymentdetail (firstname, email, address, city, state, zip, name, cardnumber, expmonth, expyear, ccv )
                    VALUES ('$firstname','$email','$address','$city','$state','$zip','$name','$cardnumber','$expmonth','$expyear','$ccv')";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            echo '<script>alert("Huh? Something went wrong!")</script>';
        }
        echo '<script>alert("Pay Successfully")</script>';
        header('Refresh: 1; URL = ../Home.php');
    
}

?>