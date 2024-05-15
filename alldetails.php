<!-- total thoughts
total types
total msg

total users are login on website +  detail about user
total user registraton on website + detail sbout user
 delete user -->

 <?php
include('ad_header.php');
require 'config.php';
?>
<section class="types" id="types">
  <h1 class="heading"><span>.</span> all <span>details </span><a href="ad_index.php" class="btn">Back</a></h1>
      <div class="box-container">
      <div class="box">
     
      <?php
$result=mysqli_query($conn,"SELECT * FROM types"); 
$row=mysqli_num_rows($result) ;
echo "<label class='msg detail'> total types => ".$row."</label><a href='alltypes.php' class='btn msg'>all types</a>"; 
$res=mysqli_query($conn,"SELECT * FROM all_thoughts"); 
$row2=mysqli_num_rows($res) ;
echo "<label class='msg detail'> total thoughts => ".$row2."</label><a href='allthoughts.php' class='btn msg'>all thoughts</a>"; 


?>
</div></div></div></section>

 <section class="newpage contact">
       
       <h1 class="heading"><span>user </span>.</h1>
 <div class="row" >
 <form method="post">

 <table align="center" border="2">
     
               <?php 
$log=mysqli_query($conn,"SELECT * FROM login");
while($user=mysqli_fetch_array($log)){?>
  <tr ><td >
        <?php echo " <label class='msg detail' >user name :=>  ".$user['username']."</label>";?>
        </td>
        <td align="center"> <?php  echo "<a href='userinfo.php?username=$user[1]' class='btn msg' align='right'>"; ?>
          view  detail </a></td>
          <td width=30></td>
       
          <td align="end"> <td align="center"> <?php  echo "<a href='deleteuser.php?id=$user[0]' class='btn msg' align='right'>"; ?>delete user</a> </td> </tr>
                <br>
                <?php $user[]++;
                 } ?>
                
 </div></div>
          <tr><td align="center" class=" btn"> <?php $lc=mysqli_num_rows($log) ;
echo "<label class='msg detail' > total users => ".$lc."</label>"; 
?></td></tr> </table> </form>


   </section>
<?php
include('ad_footer.php');
?>

