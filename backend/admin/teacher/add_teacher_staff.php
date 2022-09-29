<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>ADD Teacher/Staff</h4>
              </div>
              <div class="form-section">
                
                <form method="POST" enctype="multipart/form-data">
                    <h6>ADD Teacher/Staff</h6>
                    <!-- <div class="input-single-box ">   
                        <select name="status" class="form-control col-lg-12 col-md-12 col-12">
                            <option value="">Select One</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div> -->
                     <div class="input-single-box">
                     <div class="row">
                        <div class="col-lg-8 col-md-9 col-12">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" value="" required  placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <label>Designation:</label>
                            <input type="text" name="designation" class="form-control" value="" placeholder="Designation :" required >
                        </div>
                     </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Department Name:</label>  
                            <select name="department" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                               $departmnet=$db->link->query("SELECT * FROM `department`");
                               if($departmnet)
                               {
                                 while ($show_main_menu=$departmnet->fetch_array()) {
                                   ?>
                                   <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['1']?></option>
                                   <?php
                                 }
                               }
                               ?>
                                

                            </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Voter ID No.:</label>
                                <input type="text" name="voter_id" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Date Of Birth:</label>
                                <input type="text" name="date" class="form-control datepicker" value="" required >
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Blood Group:</label>
                                <input type="text" name="blood_gp" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Religion:</label>  
                            <select name="religion" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                              
                            </select>
                            </div><div class="col-lg-4 col-md-4 col-12">
                            <label>Relationship :</label>  
                            <select name="relation" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="1">Married</option>
                                <option value="0">Unmrried</option>

                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                            
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mobile :</label>
                                <input type="number" name="mobile" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" value="" required >
                            </div>
                            
                        </div>
                    </div>  
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Join Date :</label>
                                <input type="text" name="join_date" class="form-control datepicker" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>MPO Date :</label>
                                <input type="text" name="mpo_date" class="form-control datepicker" value="" required >
                            </div>
                            
                        </div>
                    </div>
                     <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Present Address :</label>
                                <textarea name="present" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Permanent Address :</label>
                                <textarea name="permanent" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                     <div class="input-single-box">
                        <label>Education Qualification :</label>
                        <input type="text" name="education" class="form-control summernote">
                        
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                            <label>Gender :</label>  
                            <select name="gender" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                              
                            </select>
                            </div><div class="col-lg-6 col-md-6 col-12">
                            <label>Type :</label>  
                            <select name="type" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="1">Teacher</option>
                                <option value="0">Staff</option>

                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        
                    </div>
                    <div class="input-single-box ">   
                        <select name="status" class="form-control col-lg-12 col-md-12 col-12">
                           
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                     
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>