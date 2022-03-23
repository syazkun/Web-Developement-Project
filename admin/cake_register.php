<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php 
include('database/dbconfig.php');
error_reporting(0);
    if (isset($_POST['registerbtn'])) {
        $name = $_POST['name'];
        $branch = $_POST['branch'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        if ($name != "" && $branch != "" && $price != "" && $quantity != "" ) {
            $sql = "INSERT INTO managecake (name, branch, price, quantity)
                    VALUES ('$name','$branch','$price','$quantity')";
            $result = mysqli_query($connection, $sql);
            if ($result){
                echo '<script>alert("Add Successfully"")</script>';
            }else{
              echo '<script>alert("Something went wrong..")</script>';
            }
        }else {
            echo '<script>alert("Cannot leave blank !")</script>';
        } 
  }

?>
<div class="modal fade" id="managecakedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Cake Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Name </label>
                        <select id="name" name="name" class="form-control" placeholder="Enter Cake Name"
                            value="<?php echo $name; ?>">
                            <option value="Heavenly Chocolate Cake">Heavenly Chocolate Cake</option>
                            <option value="Red Velvet Standard">Red Velvet Standard</option>
                            <option value="Pandan Gula Melaka">Pandan Gula Melaka</option>
                            <option value="Nutella Cheese Tart">Nutella Cheese Tart</option>
                            <option value="Pecan ButterscotchCake">Pecan ButterscotchCake</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <select id="branch" name="branch" class="form-control" value="<?php echo $branch; ?>">
                            <option value="Setia Alam City Mall">Setia Alam City Mall</option>
                            <option value="SACC Mall in Shah Alam">SACC Mall in Shah Alam</option>
                            <option value="AEON Shah Alam">AEON Shah Alam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price RM</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price"
                            value="<?php echo $price; ?>">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity"
                            value="<?php echo $quantity; ?>">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cake Management
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#managecakedata">
                    Manage Cake
                </button>
            </h6>
        </div>
        <div class="card-body">
            <?php 
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
      echo'<h2>'.$_SESSION['success'].'</h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo'<h2 class="bg-danger>'.$_SESSION['status'].'</h2>';
      unset($_SESSION['status']);
    }
    ?>

            <div class="table-responsive">
                <?php
        $connection = mysqli_connect("localhost","root","","adminpanel");
        $query = "SELECT * FROM managecake";
        $query_run = mysqli_query($connection, $query);
        ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Cake </th>
                            <th>Branch </th>
                            <th>Price</th>
                            <th>Quantity </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                        <tr>
                            <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['branch']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>
                                <form action="cake_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['Id'];?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                </form>
                                <!-- data-toggle="modal" data-target="#editcakedata"> -->
                            </td>
                            <td>
                                <form action="code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['Id'];?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger "> DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
              }
            } else {
              echo "no record found";
            }
            ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editcakedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Cake Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Name </label>
                        <select id="name" name="name" class="form-control" placeholder="Enter Cake Name">
                            <option value="Heavenly Chocolate Cake">Heavenly Chocolate Cake</option>
                            <option value="Red Velvet Standard">Red Velvet Standard</option>
                            <option value="Pandan Gula Melaka">Pandan Gula Melaka</option>
                            <option value="Nutella Cheese Tart">Nutella Cheese Tart</option>
                            <option value="Pecan ButterscotchCake">Pecan ButterscotchCake</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <select id="branch" name="branch" class="form-control" value="<?php echo $branch; ?>">
                            <option value="Setia Alam City Mall">Setia Alam City Mall</option>
                            <option value="SACC Mall in Shah Alam">SACC Mall in Shah Alam</option>
                            <option value="AEON Shah Alam">AEON Shah Alam.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price RM</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price"
                            value="<?php echo $price; ?>">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity"
                            value="<?php echo $quantity; ?>">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php'); 
include('includes/footer.php');
?>