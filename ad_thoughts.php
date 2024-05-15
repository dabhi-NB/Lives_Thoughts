<?php
include('ad_header.php');
require 'config.php';
$keywords=$_REQUEST["types_name"];

$res=mysqli_query($conn,"SELECT * FROM all_thoughts where keywords='$keywords'");
?>
<section class="types newpage" id="types">
<h1 class="heading"><?php echo $keywords; ?>
<span>.</span> all <span>  thoughts  </span>  <a href="alltypes.php" class="btn">Back</a></h1>
</section>

<section class="types" id="thought">
<div class="box-container">
           
<?php 
while($thought=mysqli_fetch_array($res)){
?>
<div class="box">
<div class="image">
            <img src="<?php echo "/Tpic/".$thought['thoughts_image']; ?>">
                <div class="type icons">                   
              <?php  
                echo $thought['thoughts_name'];?>
                <?php echo" <a href='editthought.php?thoughts_id=$thought[0]' class='btn msg'>";?>
                edit thought</a>
                <?php echo" <a href='deletethought.php?thoughts_id=$thought[0]' class='btn msg'>";?>
        delete type</a>
                </div> 
                </div> </div> 
                 <?php $thought[]++; } ?>
                
             
               
 <section class="types newpage" id="types">
<h1 class="heading">
<span>.</span>  
<?php echo "<a href='addthoughts.php?keywords=$keywords' class='btn'>"; ?>
           add new thought </a></h1>
</section>
</div>
                    
</section>
 <?php
include('ad_footer.php');
?>

