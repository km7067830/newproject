<html>
<head>

<title>Welcome </title>
 <link rel="stylesheet" type="text/css" href="css/mypo-list.css">

 </head>
 <body>
    <p id="demo" color="red"></p>
    <script>


</script>

<div class="container">

    <h1 align="center" >welcome page</h1> 
   

    <br><br>
  

     <table  border="5">  
                          <tr>  
                               <td>UserId</td>
                               <td width=""> Nmae</td>  
                                <td width="">Username</td>  
                               <td width="">Contact</td>  
                               <td width="">Address</td>
                               <td width="">Email</td>
                               <td width="">image</td>
                                <td width="">Update</td>
                                 <td width="">Delete</td>
                              
                                 
                                      

                          </tr>  
<?php
include ("database.php");
$m= new DB_con();

$fr_query = "SELECT * FROM reg  ";
$reaches = $m->fetchAll($fr_query);


foreach ($reaches as $reach) 
{
  echo '<tr>'; 

  
  $par_field = $reach['id'];
  $_SESSION['id']=  $par_field ;
   $uname = $reach['uname'];
   $password = $reach['password'];
  $opt = '<td><a  href="update.php?id='.$par_field.'">Edit</td>';

    $opt2 = '<td><a  href="delete.php?id='.$par_field.'">Delete</td>';
  
  $opt4 = '<td> <img  src= " '.$reach['image'].'"  hight ="100px"  width="100px"  > </td>';
 
 

  echo '<td>'.$reach['id'].'</td>'.'<td>'.$reach['name'].'</td>'.'<td>'.$reach['uname'].'</td>'.'<td>'.$reach['pnum'].'</td>'.'<td>'.$reach['address'].'</td>'.'<td>'.$reach['email'].'</td>' . $opt4 . $opt . $opt2;



  
         print_r('</tr>');  

}
?>
</table>    
    
  
  
  


<a href="login.php" >login here</a>

<a href="logout.php" >logout</a>


</div>
</body>
</html>