<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Create Admin</h4>
              </div>
              <div class="links">
                  <a href="view_main_menu.php" class="btn btn-info">View Admin</a>
              </div> 
              <div class="form-section">
           <?php
              $user_name= isset($_POST['user_name'])?$_POST['user_name']:"";
              $email= isset($_POST['email'])?$_POST['email']:"";
              $phone= isset($_POST['phone'])?$_POST['phone']:"";
              $adress= isset($_POST['adress'])?$_POST['adress']:"";
              $status= isset($_POST['status'])?$_POST['status']:"";
              $password= isset($_POST['password'])?$_POST['password']:"";
              $confirm_password= isset($_POST['confirm_password'])?$_POST['confirm_password']:"";
              $image= isset($_POST['image'])?$_POST['image']:"";
              
              if (isset($_POST['save'])) 
              {
                if ($password !=$confirm_password) 
                {
                  echo "<div class='alert alert-danger'>Password Does Not Match</div>";
                   }
                  else{
                    $username=mysqli_real_escape_string($db->link,$username);
                    $mail=mysqli_real_escape_string($db->link->$mail);
                    $phone=mysqli_real_escape_string($db->link,$phone);
                    $adress=mysqli_real_escape_string($db->link,$adress);
                    $status=mysqli_real_escape_string($db->link,$status);
                    $password=mysqli_real_escape_string($db->link,md5($password));
                    $confirm_password=mysqli_real_escape_string($db->link,md5($confirm_password));

                    $password_recover= isset($_POST['password']?$_POST['password']:'');

                     $sql=$db->link->query("INSERT INTO `create_admin`( `user_name`, `email`, `phone`, `user_type`, `password`, `confirm_password`, `image`,`recover_password`) VALUES ('$user_name','$email','$phone','$status','$password','$confirm_password','$image','$recover_password')");
                  if($sql)
                                {
                                    echo "<div class='alert alert-success'>Data Insert Successfully</div>";
                                
                                        
                                  
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly!</div>";
                                 }

                  }
                

               
              }

               ?> 
                <form method="POST">
                    
                     <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">User Name</label>
                        <input type="text" name="user_name" class="form-control col-lg-5 col-md-5 col-12"required placeholder="username">
                    </div>
                     <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Email</label>
                        <input type="email" name="email" class="form-control col-lg-5 col-md-5 col-12"required placeholder="ex:example@gmail.com">
                    </div>  
                    <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Phone</label>
                        <input type="number" name="phone" class="form-control col-lg-5 col-md-5 col-12"required placeholder="ex:01521526846">
                    </div>
                        <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Adress</label>
                        <input type="text" name="adress" class="form-control col-lg-5 col-md-5 col-12"required placeholder="ex:feni">
                    </div>
                     <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">User Type</label>
                        <select name="status" class="form-control select2 col-lg-5 col-md-5 col-12">
                            <option value="">Select One</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                        <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Password</label>
                        <input type="password" name="password" class="form-control col-lg-5 col-md-5 col-12"required>
                        </div> 
                        <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control col-lg-5 col-md-5 col-12"required>
                        </div>
                          <div class="input-single-box row">
                        <label class="col-lg-4 col-md-4 col-12">Picture</label>
                        <input type="file" name="image" class=""required >
                    </div>
                    <div class="input-single-box " style="text-align: center !important;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save" value="Create">
                    </div>
                </form>  
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>