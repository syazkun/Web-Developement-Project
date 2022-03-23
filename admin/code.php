<?php
include('database/dbconfig.php');
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM managecake WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your Data is DELETED";
        header('Location: cake_register.php');
    }
    else
    {
        $_SESSION['status']="Your Data is NOT DELETED";
        header('Location: cake_register.php');
    }
}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $branch = $_POST['edit_branch'];
    $price = $_POST['edit_price'];
    $quantity = $_POST['edit_quantity'];

    $query = "UPDATE managecake SET name='$name', branch='$branch', price='$price', quantity='$quantity' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your Data is UPDATED";
        header('Location: cake_register.php');
    }
    else
    {
        $_SESSION['status']="Your Data is NOT UPDATED";
        header('Location: cake_edit.php');
    }
}

?>