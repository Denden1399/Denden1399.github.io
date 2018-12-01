
<?php 

include('db2.php');

$ProdID=$_GET['r_id'];

mysql_query("delete from reservation where r_id = '$ProdID' ")or die(mysql_error());
echo "<script>alert('Data successfully Deleted.')</script>";
header('location:reservations.php');
?>
