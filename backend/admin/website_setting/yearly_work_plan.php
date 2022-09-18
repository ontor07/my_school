<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Year Work Plan</h4>
              </div>
              <?php
              if(isset($_POST['save']))
              {
                $date = $_POST['date'];
                $title = $_POST['title'];
                $db->insert('year_work_plan',['date'=>$date,'title'=>$title]);
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

