<?php
include_once('database.php');



$usercredentials=new DB_con();





if(isset($_POST['submit']))
{

$uname=$_POST['uname'];
$password=md5($_POST['password']);
    


$ret=$usercredentials->login($uname,$password);



//print_r($ret);
 
//$num=mysqli_fetch_array($ret);


if($ret== 1)
{
   

echo "<script>window.location.href='welcome.php'</script>";
}

else
{
  echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
}
}
?>
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration Form</title>
</head>
<body>
   <h1>Login Form</h1>
  <form method="post" action="" enctype="multipart/form-data">
     <table>
      <tr>
       <th>UserName</th>
       <td><input type="text" name="uname" required></td>
     </tr>
       <tr>
      
       <th>Password</th>
       <td><input type="Password" name="password" required></td>
     </tr>
     <tr>

        <th></th>
       <td> <input type="Submit" name="submit" value="Submit"></td>
        </tr>
     </table>    
  </form>

  Reister new User ?..<a href="index.php">Register here</a>

</body>
</html>