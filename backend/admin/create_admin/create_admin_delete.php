<?php 
include('../../../database/connection.php');
$db=new database();
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$pathImage =$db->link->query("SELECT `image` FROM `create_admin` WHERE `id`='$id' ");
    $fetch_image= $pathImage->fetch_assoc();

    $path = '../admin/asset/img/admin/'.$fetch_image['image'];
    if(file_exists($path))
    {
        unlink($path);
    }

	$sql = $db->link->query("DELETE FROM `create_admin` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='create_admin_view.php'</script>";
	}
	else
	{
		echo "<script>location='create_admin_view.php'</script>";
	}
}
?>