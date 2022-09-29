<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Year Work Plan</h4>
                </div>
                <div class="links">
                    <a href="view_year_work.php" class="btn btn-info">View Year Work Plan</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $date= isset($_POST['date'])?$_POST['date']:"";
                        $title= isset($_POST['title'])?$_POST['title']:"";
                     
                         

                       $sql =$db->link->query("UPDATE `year_work_plan` SET `date`='$date',`title`='$title' WHERE `id`='$id'");
                      
                          if($sql)
                                {
                                    $file = $_FILES['image']['name'];

                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `year_work_plan` WHERE `id`='$id' ");
                                        $fetch_image = $pathImage->fetch_assoc();

                                        $path = '../../asset/img/year_work_plan/'.$fetch_image['image'];

                                        if(file_exists($path))
                                        {
                                            unlink($path);
                                        }
                                    }

                                    if($file)
                                    {
                                        $path_info = $_FILES['image']['name'];

                                        $extension = pathinfo($path_info, PATHINFO_EXTENSION);

                                        $image_name = $id.'.'.$extension;

                                        $path = '../../asset/img/year_work_plan/'.$image_name;

                                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                        $db->link->query("UPDATE `year_work_plan` SET `image`='$image_name' WHERE `id`='$id'");

                                        
                                    }

                                    echo '<div class="alert alert-success">Data Updated Successfully</div>';
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger">Data Updated Unsuccessfully</div>';
                                }

                      }


                        $sql = $db->link->query("SELECT * FROM `year_work_plan` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                <div class="input-single-box">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control datepicker" value="<?php echo $showdata['date'];?>" required >
                    </div>
                     <div class="input-single-box">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $showdata['title'];?>" required >
                    </div>
                     <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    
                        <img src="../../asset/img/year_work_plan/<?php echo $showdata['image'];?>" class="img-fluid" height="70px" width="90px">
                        
                    </div>
                    
                     
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>