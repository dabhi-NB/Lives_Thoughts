<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
}
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $imgnm=$_FILES['image']['name'];
    $tempnm=$_FILES['image']['tmp_name'];
    $folder='C:\xampp\htdocs\Tpic/'.$imgnm;
    
    $res=mysqli_query($conn,"SELECT * FROM `types`");
   $row= mysqli_fetch_array($res);
    if(mysqli_num_rows($res)>0){
        if($title!=$row['types_name'] && $img!=$row['types_image']){
            $result=mysqli_query($conn,"INSERT INTO `types` (`type_id`, `types_name`, `types_image`) VALUES ('', '$title', '$imgnm')");
          if(move_uploaded_file($tempnm,$folder)){
            echo "<script>
            alert('$title type is added!');
       </script>";
       header("location:ad_index.php");
          }  
        }
        else{
            echo "<script>
                     alert('$title that type are alrady exist!');
                </script>";
        }
    }
    else{
        echo"<script>alert('there are no any type');</script>";
    }
}
?>

<section class="newpage contact" id="login">
            <h1 class="heading"><span>add new thoughts types </span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <label for="name"> thoughts type name or title</label>
                    <input type="text" name="title" id="title" required class="box">
              
                    <label for="password">image src:</label>
                    <input type="file" name="image" id="image" required class="box">
                    
                
                <button type="submit" name="submit" class="btn">add type</button>
               <a href="alltypes.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>