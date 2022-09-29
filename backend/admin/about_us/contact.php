<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Contact us</h4>
              </div>
             
              <div class="form-section">
               <?php
               $description= isset($_POST['description'])?$_POST['description']:"";
               $map= isset($_POST['map'])?$_POST['map']:"";
              if (isset($_POST['save'])) 
              {
                
                 $sql=$db->link->query("UPDATE `contact` SET `deception`='$description', `map`='$map' WHERE `id`=1");
                  if($sql)
                                {
                                    echo "<div class='alert alert-success'>Data Insert Successfully</div>";       
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly!</div>";
                                }

                
              }

              
              $sql_select=$db->link->query("SELECT * FROM `contact` WHERE `id`=1");
              if($sql_select)
              {
                $showdata= $sql_select->fetch_assoc();
              }

               ?>
                <form method="POST">
                    <div class="input-single-box">
                        <label>Detalis</label>
                        <textarea name="description" class="form-control summernote"><?php echo $showdata['deception'];?></textarea>
                    </div>
                     <div class="input-single-box">
                        <label>Map</label>
                        <textarea name="map" class="form-control"><?php echo $showdata['map'];?></textarea>
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