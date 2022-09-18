<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Sub Manu</h4>
              </div>
              <div class="links">
                  <a href="view_sub_menu.php" class="btn btn-info">View Sub Menu</a>
              </div>  
              <div class="form-section">
               <?php
              
              if (isset($_POST['save'])) 
              {
                 $sl= isset($_POST['sl'])?$_POST['sl']:"";
                $main_menu= isset($_POST['main_menu'])?$_POST['main_menu']:"";
                $link_name= isset($_POST['link_name'])?$_POST['link_name']:"";
                $route_name= isset($_POST['route_name'])?$_POST['route_name']:"";
               

                $sql_chack=$db->link->query("SELECT * FROM `sub_menu` WHERE `sl`='$sl'");

                if (mysqli_num_rows($sql_chack) > 0) 
                {
                  echo "<div class='alert alert-info'>This Serial Number is Already Taken</div>";
                }
                else{
                         $sql=$db->link->query("INSERT INTO `sub_menu`( `sl`, `main_menu`, `link_names`, `route_name`, `status`) VALUES ('$sl','$main_menu','$link_name','$route_name','1')");
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
                        <label>Mian Menu</label>
                        <select name="main_menu" class="form-control ">
                            <option value="">Select One</option>
                            <?php
                            $main_menu=$db->link->query("SELECT * FROM `main_menu`");
                            if($main_menu)
                            {
                              while ($show_main_menu=$main_menu->fetch_array()) {
                                ?>
                                <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['2']?></option>
                                <?php
                              }
                            }
                            ?>

                            
                            
                        </select>
                    </div>
                     <div class="input-single-box">
                        <label>LinK Name</label>
                        <input type="text" name="link_name" class="form-control"required>
                    </div>
                     <div class="input-single-box">
                        <label>Route Name</label>
                        <input type="text" name="route_name" class="form-control">
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