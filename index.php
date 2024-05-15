<?php
include('header.php');
require '../admin\config.php';
$result=mysqli_query($conn,"SELECT * FROM types");
?>
<section class="home" id="home">

<div class="content">
    <h3>Life Thoughts</h3>
    <span>natural & beautiful thoughts</span>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit a iusto, numquam nemo labore officiis praesentium laboriosam accusantium aliquid quod? Tenetur nemo exercitationem cum delectus explicabo doloribus sunt ut provident! 
    
    </p>
    <a href="#types" class="btn">view now</a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="\Tpic\Darasan.mp4" loop autoplay></video>
            <h3>best thoughts</h3>
        </div>

        <div class="content">
            <h3>hey...</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis repellendus nostrum nobis vel dolorum placeat eaque saepe in impedit? Reiciendis architecto nostrum facilis necessitatibus labore, ipsum blanditiis earum praesentium beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus velit dolor voluptas ullam corrupti id facilis animi fugit sint, facere.</p>
            <a href="#types" class="btn">learn more</a>
        </div>
    </div>
</section>

<section class="types" id="types">
            <h1 class="heading">thoughts <span>types</span></h1>
      <div class="box-container">
      <?php 
      
while($row=mysqli_fetch_array($result)){
     ?>
    
        <div class="box">
           <?php echo "<div class='image'><a href='types.php?types_name=$row[1]'>";   ?>
            <img src="<?php echo "/Tpic/".$row[2];?>">
                <div class="type"><?php echo $row[1]; ?></div>
                </div></a>
            </div>
      <?php $row[]++; } ?>
      </div>
</section>

<section class="contact" id="contact">
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $message=$_POST["message"];

    $sendmsg=mysqli_query($conn,"INSERT INTO `messages` VALUES (null,'$name', '$email', '$number', '$message')");
            if($sendmsg){
                echo "<script> alert('message are sended...!'); </script>";
            }
            else{
                echo "<script> alert('message are not sended...!'); </script>";
            }}
?>
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <form action="" method="post" >
            <input type="text" name="name" placeholder="name" class="box">
            <input type="email" name="email" placeholder="email" class="box">
            <input type="number" name="number" placeholder="number" class="box">
            <textarea name="message" placeholder="message" class="box" id="" cols="30" row="10">
</textarea>
<button type="submit" name="submit" class="btn">send message</button>
</form>
        <div class="image">
            <img src="\Tpic\live.jpg" alt="">
        </div>
    </div>
</section>

<?php
include('footer.php');
?>