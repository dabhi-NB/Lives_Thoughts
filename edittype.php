<?php
include('ad_header.php');
require 'config.php';
$typeid=$_REQUEST["type_id"];

if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
    
}
$res=mysqli_query($conn,"SELECT * FROM `types` WHERE `types`.`type_id` = $typeid ");
    $row= mysqli_fetch_array($res);
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $imgnm=$_FILES['image']['name'];
    $tempnm=$_FILES['image']['tmp_name'];
    $folder='C:\xampp\htdocs\Tpic/'.$imgnm;
    
   
    if(mysqli_num_rows($res)>0){
        if($title!=$row['types_name'] && $imgnm!=$row['types_image']){
            $deltype=mysqli_query($conn,"UPDATE `types` SET `types_name` = '$title',`types_image`='$imgnm' WHERE `types`.`type_id` = $typeid");
                    if(move_uploaded_file($tempnm,$folder)){
            echo "<script>
            alert('$title type is updated!');
       </script>";
       header("location:alltypes.php");
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
            <h1 class="heading"><span>updated thoughts types </span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <label for="name">update thoughts type name </label>
                    <input type="text" name="title" id="title" required class="box" value="<?php echo $row['types_name']; ?>">
              
                    <label for="password">image src:</label>
                    <input type="file" name="image" id="image" required class="box" value="<?php echo $row['types_image']; ?>">
                    
                
                <button type="submit" name="submit" class="btn">update type</button>
               <a href="alltypes.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>