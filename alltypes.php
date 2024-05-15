<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
  header("location:ad_index.php");
}
?>
<section class="types" id="types">
  <h1 class="heading"><span>.</span> all <span>thoughts type </span><a href="ad_index.php" class="btn">Back</a></h1>
      <div class="box-container">
     
     <?php 
     $result=mysqli_query($conn,"SELECT * FROM types");
     
while($row=mysqli_fetch_array($result)){ ?>
       
<div class="box">
      <?php echo "<div class='image'>
           <a href='ad_thoughts.php?types_name=$row[types_name]'>";   ?>
           5
            <img src="<?php echo "/Tpic/".$row['types_image']; ?>" alt="image are loaded!">
                <div class="type"><?php echo $row['types_name']; ?>
            </div></div></a>
<section class="types newpage" id="types">
<h1 class="heading">
<span>.</span>  
<?php echo "<a href='ad_thoughts.php?types_name=$row[types_name]' class='btn msg'>"; ?>
          view & add <?php echo $row['types_name']; ?> thoughts </a>
          <?php echo" <a href='edittype.php?type_id=$row[0]' class='btn msg'>";?>
        edit type</a>
          <?php echo" <a href='deletetype.php?type_id=$row[0]' class='btn msg'>";?>
        delete type</a>
       </h1>
</section></div>

<?php $row[]++; }  ?>

</div></section>
<section class="types newpage" id="types">
<h1 class="heading">
<span>.</span>  <a href="addtypes.php" class="btn">add new thoughts types</a></h1>
</section>

<?php
include('ad_footer.php');
?>



