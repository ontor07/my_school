<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>View Teacher Staff</h4>
              </div>
              <div class="links">
                  <a href="add_teacher_staff.php" class="btn btn-info">Add Teacher/Staff</a>
              </div> 
              <div class="table-responsive">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <!-- <th>Designation</th>
                                <th>Department Name</th>
                                <th>Voter ID No</th>
                                <th>Date Of Birth</th>
                                <th>Blood Group</th>
                                <th>Religion</th>
                                <th>Relationship</th>
                                <th>Father Name</th>
                                <th>Mother Name</th> -->
                                <th>Mobile</th>
                                <th>Email</th>
                                <!-- <th>Join Date</th>
                                <th>MPO Date</th> -->
                                <th>Present Address</th>
                                <!-- <th>Permanent Address</th>
                                <th>Education Qualification</th>
                                <th>Gender</th> -->
                                <th>Type</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                                
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT teacher_staff.*,department.title FROM `teacher_staff` INNER JOIN `department` on teacher_staff.department=department.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['name']; ?></td>
                                    
                                    <td><?php echo $showdata['mobile']; ?></td>
                                    <td><?php echo $showdata['email']; ?></td>
                                    
                                    <td><?php echo $showdata['present']; ?></td>
                                    
                                    <td>
                                        <?php if ( $showdata['type']==1 ) {
                                            echo 'Teacher';
                                        }
                                        else
                                        {
                                            echo 'Staff';
                                        }
                                        ?>
                                    </td>
                                    <td> 
                                        <img src="../../asset/img/teacher/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                                </td>
                                    <td>
                                        
                                       <a href="edit_teacher_staff.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_teacher_staff.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
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