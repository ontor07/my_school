<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Year Work Plan</h4>
              </div>
              <div class="links">
                  <a href="view_year_work.php" class="btn btn-info">View Year Work Plan</a>
              </div> 
              <?php
              if(isset($_POST['save']))
              {
                $date = $_POST['date'];
                $title = $_POST['title'];
                $db->insert('year_work_plan',['date'=>$date,'title'=>$title]);

                $file= $_FILES['image']['name'];
                
                if($file)
                {
                    $id= $db->link->insert_id;
                    // echo $id;
                   $extension=pathinfo($file,PATHINFO_EXTENSION);

                   $image_name= rand().'.'.$extension;

                   $image_path='../../asset/img/year_work_plan/'.$image_name;

                   move_uploaded_file($_FILES['image']['tmp_name'],$image_path);


                   $db->update('year_work_plan',['image'=>$image_name],"id='$id'");


                }
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <div class="input-single-box">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control datepicker" value="" required >
                    </div>
                     <div class="input-single-box">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="" required >
                    </div>
                     <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    
                        <!-- <img src="#" class="img-fluid" height="70px" width="90px"> -->
                        
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

