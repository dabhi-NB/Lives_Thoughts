<?php
require 'config.php';
$name=$_REQUEST["name"];
$msgid=$_REQUEST["msg_id"];
                    $delmsg=mysqli_query($conn,"DELETE FROM messages WHERE `messages`.`msg_id` = $msgid");
                    if($delmsg)
                    {
                        echo "<script>
                    alert('$name message is deleted!'); </script>";
                    header("location:ad_messages.php");
                }
                    else
                    {
                    echo "<script>
                            alert('$name msg is not deleted!');
                       </script>";
                       header("location:ad_messages.php");
                       }
                
?>