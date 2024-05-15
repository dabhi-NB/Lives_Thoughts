<?php
include('ad_header.php');
require 'config.php';
$tid=$_REQUEST["thoughts_id"];

if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
    
}
$res=mysqli_query($conn,"SELECT * FROM `all_thoughts` WHERE `thoughts_id` = $tid ");
    $row= mysqli_fetch_array($res);
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $imgnm=$_FILES['image']['name'];
    $tempnm=$_FILES['image']['tmp_name'];
    $folder='C:\xampp\htdocs\Tpic/'.$imgnm;
    
   
    if(mysqli_num_rows($res)>0){
        if($title!=$row['thoughts_name'] && $imgnm!=$row['thoughts_image']){
            $upthoughts=mysqli_query($conn,"UPDATE `all_thoughts` SET `thoughts_name` = '$title',`thoughts_image` = '$imgnm' WHERE `all_thoughts`.`thoughts_id` = $tid");
                    if(move_uploaded_file($tempnm,$folder)){
            echo "<script>
            alert('$title thought is updated!');
       </script>";
       header("location:allthoughts.php");
          }  
        }
        else{
            echo "<script>
                     alert('$title that thought are alrady exist!');
                </script>";
        }
    }
    else{
        echo"<script>alert('there are no any thought');</script>";
    }
}

?>

<section class="newpage contact" id="login">
            <h1 class="heading"><span>updated thoughts </span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <label for="name">update thought name </label>
                    <input type="text" name="title" id="title" required class="box" value="<?php echo $row['thoughts_name']; ?>">
              
                    <label for="password">image src:</label>
                    <input type="file" name="image" id="image" required class="box" value="<?php echo $row['thoughts_image']; ?>">
                    
                
                <button type="submit" name="submit" class="btn">update thought</button>
               <a href="alltypes.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>