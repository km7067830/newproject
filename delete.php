<?php 
include_once 'database.php';
 $insertdata=new DB_con();
 if(isset($_GET['id'])) {
 	 $id=$_GET['id'];

 	 $sql=$insertdata->deletedata($id);



if($sql == "1")
{
echo "<script>alert('Data Deleted now now');</script>";
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
echo "<script>alert('Data not deleted');</script>";
echo "<script>window.location.href='welcome.php'</script>";
}  

 }
 
  

?>