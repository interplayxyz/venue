<?php session_start();
include '../connect.php';

$sql = "SELECT * 
FROM talk
WHERE id={$_SESSION['talkid']};";

if ($result = mysqli_query($con, $sql))
{
          while($row = mysqli_fetch_assoc($result)) 
          {
$formatPost = $row['post'];
$cleanPost = htmlentities($formatPost);
$finalPost = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$cleanPost) ;
  echo '<left><p>'.nl2br($finalPost).'</p></left> ';
          }
}

?>