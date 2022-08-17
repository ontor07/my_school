<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Main Manu</h4>
              </div>
              <div class="links">
                  <a href="create_admin_add.php" class="btn btn-info">Add Main Menu</a>
              </div> 
              <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Adress</th>
                                <th>User Type</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `create_admin`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><?php echo $showdata['2']; ?></td>
                                    <td><?php echo $showdata['3']; ?></td>
                                    <td><?php echo $showdata['4']; ?></td>
                                    <td>
                                        <?php
                                        if($showdata['5']==1)
                                        {
                                            echo "<div class='badge badge-success'>Active</div>";
                                        }
                                        else
                                        {
                                            echo "<div class='badge badge-danger'>Not Active</div>";
                                        }
                                        ?>
                                    </td>
                                    <td> <img src="../../asset/img/admin/<?php echo $showdata['8']; ?>" class="img-fluid" alt="" height="80px" width="80px"></td>
                                    <td>
                                       <a href="create_admin_edit.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="create_admin_delete.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>  
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>