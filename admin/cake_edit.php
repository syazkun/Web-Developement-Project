<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Cake Information</h6>
    </div>

    <div class="card-body">
        <?php
include('database/dbconfig.php');
    if (isset($_POST['edit_btn'])) 
{
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM managecake WHERE Id='$id'";
    $query_run = mysqli_query($connection,$query);
    
    foreach ($query_run as $row)
    {
        ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['Id'];?>">
            <div class="form-group">
                <label> Name </label>
                <select id="name" name="edit_name" class="form-control" placeholder="Enter Cake Name"
                    value="<?php echo $row['name'];?>">
                    <option value="Heavenly Chocolate Cake">Heavenly Chocolate Cake</option>
                    <option value="Red Velvet Standard">Red Velvet Standard</option>
                    <option value="Pandan Gula Melaka">Pandan Gula Melaka</option>
                    <option value="Nutella Cheese Tart">Nutella Cheese Tart</option>
                    <option value="Pecan ButterscotchCake">Pecan ButterscotchCake</option>
                </select>
            </div>
            <div class="form-group">
                <label>Branch</label>
                <select id="branch" name="edit_branch" class="form-control" value="<?php echo $row['branch'];?>">
                    <option value="Setia Alam City Mall">Setia Alam City Mall</option>
                    <option value="SACC Mall in Shah Alam">SACC Mall in Shah Alam</option>
                    <option value="AEON Shah Alam">AEON Shah Alam</option>
                </select>
            </div>
            <div class="form-group">
                <label>Price RM</label>
                <input type="number" name="edit_price" class="form-control" placeholder="Enter price"
                    value="<?php echo $row['price'];?>">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="edit_quantity" class="form-control" placeholder="Enter Quantity"
                    value="<?php echo $row['quantity'];?>">
            </div>

            <?php
    }
}

?>
            <div class="modal-footer">
                <a href="cake_register.php" class="btn btn-secondary">Close</a>
                <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>