<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Edit Sub Manu</h4>
              </div>
              <div class="links">
                  <a href="view_sub_menu.php" class="btn btn-info">View Sub Menu</a>
              </div> 
              <div class="form-section">
               <?php
               if (isset($_GET['id']))
                {
                 
                  $id=$_GET['id'];
                      if (isset($_POST['save'])) 
                      {
                          $sl= isset($_POST['sl'])?$_POST['sl']:"";
                           $main_menu= isset($_POST['main_menu'])?$_POST['main_menu']:"";
                          $link_name= isset($_POST['link_name'])?$_POST['link_name']:"";
                          $route_name= isset($_POST['route_name'])?$_POST['route_name']:"";
                         

                       $sql =$db->link->query("UPDATE `sub_menu` SET `sl`='$sl',`main_menu`='$main_menu',`link_names`='$link_name',`route_name`='$route_name' WHERE `id`='$id'");
                          if ($sql) 
                          {
                           echo "<div class='alert alert-success'>Data Updated!</div>";
                          }
                          else
                          {
                            echo "<div class='alert alert-danger'>Data cannot updated!</div>";

                          }

                      }
                       $sql_get = $db->link->query("SELECT * FROM `sub_menu` WHERE `id`='$id'");
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
                        <label>Status</label>
                        <select name="main_menu" class="form-control ">
                            <option >Select One</option>
                            <?php
                            $show_mainmenu=$db->link->query("SELECT * FROM `main_menu`");
                            if($show_mainmenu)
                            {
                              while ($show_menu = $show_mainmenu->fetch_array() )
                              {
                                if ( $showdata['2'] == $show_menu['0']) 
                                {
                                  $selected ='selected';
                                }
                                else{
                                  $selected ='';
                                }
                                ?>
                                <option <?php echo $selected; ?> value="<?php echo $show_menu['0']; ?>"><?php echo $show_menu['2']; ?>
                                </option>
                                <?php
                              }
                            }
                            ?>
                           
                            
                        </select>
                    </div>
                     <div class="input-single-box">
                        <label>LinK Name</label>
                        <input type="text" name="link_name" class="form-control"required value="<?php echo $showdata['3'];?>">
                    </div>
                     <div class="input-single-box">
                        <label>Route Name</label>
                        <input type="text" name="route_name" class="form-control" value="<?php echo $showdata['4'];?>">
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