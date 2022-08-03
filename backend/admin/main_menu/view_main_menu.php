<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Main Manu</h4>
              </div>
              <div class="links">
                  <a href="add_main_menu.php" class="btn btn-info">Add Main Menu</a>
              </div> 
              <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Link Name</th>
                                <th>Icon Name</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `main_menu`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><?php echo $showdata['2']; ?></td>
                                    <td><?php echo $showdata['3']; ?></td>
                                    <td>
                                       <a href="edit_main_menu.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_main_menu.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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