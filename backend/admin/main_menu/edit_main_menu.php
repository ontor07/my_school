<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Edit Main Manu</h4>
              </div>
              <div class="links">
                  <a href="view_main_menu.php"class="btn btn-info">View Main Menu</a>
              </div> 
              <div class="form-section">
               <?php
               if (isset($_GET['id']))
                {
                 
                 $id=$_GET['id'];
                      if (isset($_POST['save'])) 
                      {
                          $sl= isset($_POST['sl'])?$_POST['sl']:"";
                          $link_name= isset($_POST['link_name'])?$_POST['link_name']:"";
                          $icon= isset($_POST['icon'])?$_POST['icon']:"";
                          $status= isset($_POST['status'])?$_POST['status']:"";

                       $sql = $db->link->query("UPDATE `main_menu` SET `sl`='$sl',`link_name`='$link_name',`icon_name`='$icon',`status`='$status' WHERE `id`='$id'");
                          if ($sql) 
                          {
                           echo "<div class='alert alert-success'>Data Updated!</div>";
                          }
                          else
                          {
                            echo "<div class='alert alert-danger'>Data cannot updated!</div>";

                          }

                      }
                       $sql_get = $db->link->query("SELECT * FROM `main_menu` WHERE `id`='$id'");
                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_array();
                        }
               }

               ?>
                <form method="POST">
                    <div class="input-single-box">
                        <label>Serial No</label>
                        <input type="numbar" name="sl" class="form-control" placeholder="Ex:001" readonly value="<?php echo $showdata['1']; ?>">
                    </div>
                     <div class="input-single-box">
                        <label>LinK Name</label>
                        <input type="text" name="link_name" class="form-control"required value="<?php echo $showdata['2'];?>">
                    </div>
                     <div class="input-single-box">
                        <label>Icon Name</label>
                        <input type="text" name="icon" class="form-control"required value="<?php echo $showdata['3'];?>">
                    </div>
                     <div class="input-single-box">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">Select One</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" value="Update">
                    </div>
                </form>  
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>