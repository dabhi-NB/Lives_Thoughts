<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
}
       ?>

<h1 class="heading">
<span>.</span> user <span>  messages  </span>  <a href="ad_index.php" class="btn">Back</a></h1>
              
<?php 
$res=mysqli_query($conn,"SELECT * FROM messages");
while($msg=mysqli_fetch_array($res)){
?><section class="types" id="types">
<div class="box-container">
<div class="box">
<div class="image">
                <div class="type">  
                <?php echo $msg['message']; ?>
              
                </div> 
                </div> 

<section class="types newpage" id="types">
<h1 class="heading"> 
<div class="msg" align="left">
 
<?php   echo "sender name =>  ",$msg['name'];  ?>
            <br>
              <?php  echo "sender email =>  ", $msg['email'];?>
                <br>
                <?php echo "sender no. =>  ",$msg['number'];?>
                <br>
                <?php echo "<a href='deletemsg.php?msg_id=$msg[0]' class='btn msg'>"; ?>
          delete <?php echo $msg['name']; ?> message </a></h1>
         
 </div></section></div>
                
                <?php $msg[]++; } 
                 ?>
                
 <?php
include('ad_footer.php');
?>

