<?php session_start();
include '../connect.php';

echo '<div class="row">
  <div class="col-md-2 col-xs-2">
    <button type="button" class="btn btn-default btn-default " id="shoutPrevious">
    <font size="6"><span class="glyphicon glyphicon-arrow-left"></span></font>
    </button>
  </div>
  <div class="col-md-8 col-xs-8">';

$sql = "SELECT * 
FROM shout
WHERE id>{$_SESSION['shoutid']}
ORDER BY id 
ASC LIMIT 1;";

if ($result = mysqli_query($con, $sql))
{
          while($row = mysqli_fetch_assoc($result)) 
          {
$_SESSION['shoutid'] = $row['id']; 
$aLink = trim($row['link']);
$aLink = htmlentities($aLink);
$row['title'] = htmlentities($row['title']);

  echo '<center>
  <font size="4" class="shoutTitleFont">
  <a target="_blank" href="'.$aLink.'">
  '.$row['title'].'</a></font><a target="_blank" href="'.$aLink.'">
  <br><font size="2" class="shoutLinkFont">'.$aLink.'</font>
  </a>
  </center>';
          }
}

$sql = "SELECT *
FROM shout
WHERE id = ( SELECT MAX(id) FROM shout ) ;";
if ($result = mysqli_query($con, $sql))
{
          while($row = mysqli_fetch_assoc($result)) 
          {
            if($row['id'] != $_SESSION['shoutid']) {
              echo '</div><div class="col-md-2 col-xs-2">
    <button type="button" class="btn btn-default btn-default " id="shoutNext">
    <font size="6"><span class="glyphicon glyphicon-arrow-right"></span></font>
    </button>
  </div>';
            } else {
              echo '</div><div class="col-md-2 col-xs-2">
    <button type="button" class="btn btn-default btn-default  disabled">
    <font size="6"><span class="glyphicon glyphicon-arrow-right"></span></font>
    </button>
  </div>';
            }
            }
          }

?>