<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Red Crescent</h4>
                </div>
                <div class="links">
                    <a href="red_crescent.php" class="btn btn-info">Add Red Crescent</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `red_crescent`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><?php echo $showdata['2']; ?></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                    <td>
                                        <img src="../../asset/img/red_crescent/<?php echo $showdata['image']; ?>" alt="" class="img-fluid" height="50px" width="50px">
                                    </td>
                                    <td>
                                        <a href="edit_red_crescent.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                        <a href="delete_red_crescent.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<?php include('../layouts/footer.php'); ?>