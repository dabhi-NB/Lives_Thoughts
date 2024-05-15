<?php
require '../admin\config.php';
if(!empty($_SESSION["username"]))
{ 
    $username=$_SESSION["username"];
   
    $result = mysqli_query($conn,"select * from login where username='$username'");
    $row=mysqli_fetch_array($result);
    $id=$row["id"];
    $likes=$row["likes"];
    
    $tid=$_REQUEST["thoughts_id"];
    
    while($row=mysqli_fetch_array($result)){
        if($likes){
            $tid=$likes.",".$tid;  
        }
    }
//   if(isset($likes))
//   { 
//      $tid=$likes.",".$tid;
//   }
     $query="UPDATE `login` SET `likes` = '$tid' WHERE `login`.`id` ='$id'";
     $lik=mysqli_query($conn,$query);
                if($lik)
                    {
                    echo "<script>
                    alert('liked success'); </script>";
                    header("location:index.php");
                    }
 }
?>