<?php
require 'config.php';
$id=$_REQUEST["id"];
     
            $deltype=mysqli_query($conn,"DELETE FROM `login` WHERE id = '$id'");
            if($deltype)
            {
                echo "<script>
                  alert('user is deleted!'); </script>";
                  header("location:alldetails.php");
            }
      else{
                  echo "<script>
                    alert('user is not deleted!');
                  </script>";
                  header("location:alldetails.php");
             }
      ?>