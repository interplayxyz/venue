<?php
$sql = "SELECT *
              FROM talk
              WHERE id = ( SELECT MAX(id) FROM talk ) ;";

if ($result = mysqli_query($con, $sql))
{
          while($row = mysqli_fetch_assoc($result)) 
          {
  echo '<center><font size="5">'.$row['title'].'</font><br><font size="2">By '.$row['user'].'</font></center> ';
}
}
?>