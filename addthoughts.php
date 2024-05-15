<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
}
$keywords=$_REQUEST["keywords"];
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $img=$_POST["img"];
    $res=mysqli_query($conn,"SELECT * FROM `types`");
    $result=mysqli_query($conn,"SELECT * FROM all_thoughts");
    $row=mysqli_fetch_array($result);

    if(mysqli_num_rows($result)>0){
        if($title!=$row['thoughts_name'] && $img!=$row['thoughts_image'] && $keywords!=$row['keywords']){
            $result=mysqli_query($conn,"INSERT INTO `all_thoughts` (`thoughts_id`, `thoughts_name`, `thoughts_image`, `keywords`) VALUES ('', '$title', '$img', '$keywords')");
            echo "<script>alert('your thought are inserted..');</script>";
            header("location:ad_index.php");
        }
        else{
            echo "<script>alert('$title that type are alrady exist!');</script>"."heyyy";
        }
    }
    else{
        echo"<script>alert('there are no any type');</script>"."byee";
    }
}
?>

<section class="newpage contact" id="login">
            <h1 class="heading"><span>add new thought in <?php echo $keywords; ?> thoughts </php></span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off">
                    <label for="name"> thought name:=</label>
                    <input type="text" name="title" id="title" required class="box">
              
                    <label for="password">image src;=</label>
                    <input type="file" name="img" id="img" required class="box">

                <button type="submit" name="submit" class="btn">add thought</button>
               <a href="allthoughts.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>