<?php
include('header.php');
    require '../admin\config.php';
    if(!empty($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result = mysqli_query($conn,"select likes from login where username='$username'");
        if($row=mysqli_fetch_assoc($result)){ ?>

            <section class="types newpage" id="types">
            <h1 class="heading">thoughts <span>liked..</span>
              <a href="index.php" class="btn">Back</a></h1>
              <div class="box-container">
<?php
$like=$row["likes"];

$res=mysqli_query($conn,"SELECT * FROM all_thoughts where thoughts_id=$like");

while($thought=mysqli_fetch_array($res)){
?>
    <div class="box">
       <div class="image">
        <img src="<?php echo "/Tpic/".$thought["thoughts_image"];?>">
            <div class="type"><?php echo $thought["thoughts_name"]; ?></div>
        </div>
        </div>
<?php
$thought[]++; 
}
echo" </div>
</section>";
        } 
include('footer.php');
   }
else{
   header("location:login.php");
   
}
?>
