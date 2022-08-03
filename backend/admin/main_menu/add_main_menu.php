<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Main Manu</h4>
              </div>
              <div class="links">
                  <a href="view_main_menu.php" class="btn btn-info">View Main Menu</a>
              </div> 
              <div class="form-section">
               <?php
               $sl= isset($_POST['sl'])?$_POST['sl']:"";
              $link_name= isset($_POST['link_name'])?$_POST['link_name']:"";
              $icon= isset($_POST['icon'])?$_POST['icon']:"";
              $status= isset($_POST['status'])?$_POST['status']:"";
              if (isset($_POST['save'])) 
              {
                if (!empty($sl) && !empty($link_name) && !empty($icon)) {
                 $sql=$db->link->query("INSERT INTO `main_menu`(`sl`, `link_name`, `icon_name`, `status`) VALUES ('$sl','$link_name','$icon','$status')");
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
                    <div class="input-single-box">
                        <label>Serial No</label>
                        <input type="numbar" name="sl" class="form-control" placeholder="Ex:001" required>
                    </div>
                     <div class="input-single-box">
                        <label>LinK Name</label>
                        <input type="text" name="link_name" class="form-control"required>
                    </div>
                     <div class="input-single-box">
                        <label>Icon Name</label>
                        <input type="text" name="icon" class="form-control"required>
                    </div>
                     <div class="input-single-box">
                        <label>Status</label>
                        <select name="status" class="form-control select2">
                            <option value="">Select One</option>
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