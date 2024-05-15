<?php
include('header.php');
require '../admin\config.php';
$keywords=$_REQUEST["types_name"];  
$result=mysqli_query($conn,"SELECT * FROM types");
$row=mysqli_fetch_array($result);
$res=mysqli_query($conn,"SELECT * FROM all_thoughts");
?>
<section class="types newpage" id="types">
<h1 class="heading"><?php echo $keywords; ?>
<span>.</span>  <a href="index.php" class="btn">Back</a></h1>
</section>
<section class="types" id="thought">
<div class="box-container">
           
<?php 
while($thought=mysqli_fetch_array($res)){
    if($keywords==$thought["keywords"]){?>
<div class="box"><div class="image">
            <img src="<?php echo "/Tpic/".$thought['thoughts_image']; ?>">
                <div class="type icons">
                                 
                <input type="text" name="thoughts_id[]" id="thoughts_id" value="<?php echo $thought['thoughts_id']; ?>" hidden >
              
        <?php echo $thought['thoughts_name'];
          if(empty($_SESSION["username"]))
          {       echo" </div></div></div>";}
    else
        {                
             echo"<a href='liked.php?thoughts_id=$thought[0]' class='fas fa-heart heart'></a>"; ?>
</div></div></div>
        <?php $thought[]++; 
    } }}?> 
    </div>  
</section>
 <?php

include('footer.php');
?>

