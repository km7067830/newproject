<?php 
session_start();
define('server','localhost');
define('user', 'root' );
define('password', '');
define('db_name', 'newproject');
 
   class DB_con
   {
   	 function __construct()
   	 {
   	 	$conn=mysqli_connect(server,user,password,db_name);
   	 	$this->dbh=$conn;
   	 	if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
	}


  public function insert($fname,$uname,$email,$contact,$adrss,$password, $folder)
  {

     //echo  "$id" . "$fname" . "$uname ". "$contact". "$adrss" ."$email" ."$password";

          $exist=mysqli_query($this->dbh,"select * from reg where uname='$uname' or email='$email' ");
          
                

         // exit;
          if($exist->num_rows==0)
          {
          	$res=mysqli_query($this->dbh,"INSERT INTO `reg`(`name`, `uname`, `email`, `pnum`, `address`, `password`, `image`) VALUES ('$fname','$uname','$email','$contact','$adrss','$password','$folder')") or die('inset query error');
            return $res;
          }
                else
                {
                	return $exist;
                }

  }


    public function login($uname,$password)
     {  
 $res=mysqli_query($this->dbh,"select * from reg where   uname='$uname'  and password='$password'  ");
// print_r($res);
 //exit;

              $data = array() ; 
       while($row = mysqli_fetch_assoc($res)){
       $data[] = $row ; 
                      $_SESSION['id']= $row['id'];
                       $_SESSION['name']= $row['name'];  
                      $id=$_SESSION['id'];



       if($res->num_rows==1)
       

        {
            
            return $res;

          
           } 

          
          
            else
            {

              return $res;
            }
          
          }
          } 



 
              
              
            
           
         public  function fetchAll($fr_query) 
{
       $run = mysqli_query($this->dbh,$fr_query);

       $data = array() ; 
       while($row = mysqli_fetch_assoc($run)){
       $data[] = $row ; 
       } 
       return $data;   
}


              

             public function update($id,$status)

            {
               
              $res=mysqli_query($this->dbh,"UPDATE reg SET status='$status'  where id =" .$id );
              return $res;
            }

            public function deletedata($id)
            {
                $res = mysqli_query($this->dbh,"DELETE FROM reg WHERE id='" . $id . "'");
                
                
                return $res;
            }
      
  public function updatedata($id,$fname,$uname,$email,$contact,$adrss,$password,$folder)
 {
       //   echo  "$id" . "$fname" . "$uname ". "$contact". "$adrss" ."$email" ."$password";

         $res=mysqli_query($this->dbh,"UPDATE reg SET name='$fname',uname='$uname',email='$email',
         pnum='$contact',address='$adrss',password='$password',image='$folder'  where id =" .$id );
  

  return $res;
 }


   	 }
    
   

?>