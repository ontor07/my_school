<?php 
include('../../../database/connection.php');
$db=new database();
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$pathImage =$db->link->query("SELECT `image` FROM `year_work_plan` WHERE `id`='$id' ");
    $fetch_image= $pathImage->fetch_assoc();

    $path = '../../asset/img/year_work_plan/'.$fetch_image['image'];
    if(file_exists($path))
    {
        unlink($path);
    }

	$sql = $db->link->query("DELETE FROM `year_work_plan` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='yearly_work_plan.php'</script>";
	}
	else
	{
		echo "<script>location='edit_year_work.php'</script>";
	}
}
?>