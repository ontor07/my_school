<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>View Year Work PLan</h4>
              </div>
              <div class="links">
                  <a href="yearly_work_plan.php" class="btn btn-info">Add Year Work Plan</a>
              </div> 
              <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                
                                <th>Date</th>
                                <th>Title</th>
                                
                                <th>image</th>
                                <th>Action</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `year_work_plan`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><?php echo $showdata['2']; ?></td>
                                    <td> 
                                        <img src="../../asset/img/year_work_plan/<?php echo $showdata['3']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                                </td>
                                    <td>
                                        <!-- <a download="../../asset/img/year_work_plan/<?php echo $showdata['3']; ?>" class="btn btn-warning btn-sm">Download</a> -->
                                       <a href="edit_year_work.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_year_work.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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