<?php
include_once("database.php");
$insertdata=new DB_con(); 
if(isset($_POST['submit']))
{
$fname=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$contact=$_POST['pnum'];
$adrss=$_POST['address'];
$password=md5($_POST['password']);
  $fnam=$_FILES['img']['name'];
    $fsize=$_FILES['img']['size'];
      $ftemp=$_FILES['img']['tmp_name'];
        $ftype=$_FILES['img']['type'];
        $folder= "image/".  $fnam;

        move_uploaded_file($ftemp, $folder );
  
$sql=$insertdata->insert($fname,$uname,$email,$contact,$adrss,$password, $folder);



if($sql == "1")
{
echo "<script>alert('Data inserted');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}  
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
</head>
<body>
    <h1>Registration Form</h1>

  <form method="post" action="" enctype="multipart/form-data">
     <table>
      <tr>
       <th>Name</th>
       <td><input type="text" name="name" required></td>
     </tr>
       <tr>
       <th>Username</th>
       <td><input type="text" name="uname" required></td>
     </tr>
       <tr>
       <th>Email</th>
       <td><input type="Email" name="email" required></td>
     </tr>
       <tr>
       <th>Contact Number</th>
       <td><input type="Number" name="pnum" required></td>
     </tr>

      <tr>
       <th>Address</th>
       <td><input type="text" name="address" required></td>
     </tr>
       <tr>
       <th>Password</th>
       <td><input type="Password" name="password" required></td>
     </tr>
     <tr>

      <tr>
       <th>image</th>
       <td><input type="file" name="img" required></td>
     </tr>
        <th></th>
       <td> <input type="Submit" name="submit" value="Submit"></td>
        </tr>
     </table>    
  </form>
    <a href="login.php">Login here</a>

</body>
</html>