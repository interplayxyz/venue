<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
<title>
venue
</title>
    <!-- bootstrap style -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
<link type="text/css" rel="stylesheet" href="resources/bootstrap.css">
  	<!-- custom stylesheet -->
<link type="text/css" rel="stylesheet" href="venuestyle.css">
<link type="text/css" rel="stylesheet" href="responsive/desktopStyle.css">
<link type="text/css" rel="stylesheet" media='screen and (min-height: 1px) and (max-height: 700px) and (min-width: 991px)' href="responsive/netbookStyle.css">
<link type="text/css" rel="stylesheet" media='screen and (min-width: 700px) and (max-width: 990px)' href="responsive/tabletStyle.css">
<link type="text/css" rel="stylesheet" media='screen and (min-width: 1px) and (max-width: 699px)' href="responsive/phoneStyle.css">
    <!-- favicon -->
<link rel="shortcut icon" href="venueIcon.ico">

</head>
<body>
<?php
//connect
//include 'connect.php';
//prompt for username before creating page
include 'login.php';
include 'connect.php';
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
  //begin page content
?>


<div id="scheduleParent"></div>


<div class="row">
  <div class="col-md-12">
  <center>
<img src="banners/contribute.jpg" class="img-responsive" alt="Responsive image">
</center></div></div>



                <!-- left div -->
    <div class="row">
      <div class="col-md-4">

								<!-- Talk -->
      <span id="talkReload">
      <div class="white shadow" id="talkBox">
    <div class="row">
    <span id="talkPostTitle">
        <div class="col-md-2 col-xs-2">
    <span id="talkPreviousButton">
        <?php include 'ajax/talkpreviousbuttonload.php' ?>
    </span>
    </div>
    <div class="col-md-8 col-xs-8">
    <span id="talkTitleContainer">
        <?php include 'ajax/talktitleload.php' ?>
    </span>
    </div>
    <div class="col-md-2 col-xs-2">
    <span id="talkNextButton">
        <?php include 'ajax/talknextbuttonload.php' ?>
    </span>
    </div>  	</div>
        </span>
                <!-- talk post -->
      	<div id="talkScroll">
      	<span id="talkPostContainer">
        <?php include 'ajax/talkpostload.php' ?>
              	</span>
      	</div>
            <!-- talk controls -->
        <center>
        <span id="talkPostControl">
<button type="button" id="talkControl" class="btn btn-lg ">Talk</button>
</span>
</center>
</span>
      	</div>
      </div>






                    <!-- center div -->
      <div class="col-md-4" id="centerDiv">
      <center>

      							<!-- watch -->
<span id="watchContainer">
<?php include'ajax/watchload.php' ?>
</span>




								<!-- controls and input display-->
<div id="inputBox">
<br><form>
<button type="button" id="watchControl" class="btn btn-default  shadow">Watch</button>
<button type="button" id="showControl" class="btn btn-default  shadow">Show</button>
<button type="button" id="shoutControl" class="btn btn-default  shadow">Shout</button>
<!--
<button type="button" id="shareControl" class="btn btn-default  shadow">Share</button>
-->
<button type="button" id="scheduleControl" class="btn btn-default  shadow">Schedule</button>
<button type="button" id="leaveControl" class="btn btn-default  shadow">Leave</button>
</form><br>
</div>




								<!-- show and continued input extension-->
		<!-- showBox also acts as control panel -->
<div id="showBox">
<span id="showContainer">
<?php include 'ajax/showload.php' ?>
</span>
</div>
    </center></div>






                    <!-- right div -->
      <div class="col-md-4">
      <div class="white shadow" id="shoutChatDiv">

      							<!-- shoutbox -->

      <div id="shoutBox">
      <span id="shoutContainer">
      <?php include 'ajax/shoutload.php' ?>
  </span>
</div>
      	</div>






								<!-- chatroom -->
      	<form name="message" id="chatForm" action="post/chatpost.php" method="post" enctype="multipart/form-data">
		<input name="chatInput" type="text" class="form-control" id="chatInput">
		<!-- submit button positioned off screen -->
		<input name="submitChat" type="submit" id="submitChat" value="DICK" style="position: absolute; left: -9999px">
		</form>

<div id="chatBox">
<span id="chatContainer">
Loading...
</span>
</div>
      	</div>
      </div>
    </div>








<?php 
} //no content after this bracket 
?>
  <!-- jQuery -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="resources/jquery-1.8.3.min.js"></script>
 <!-- Bootstrap script -->
<script type="text/javascript" src="resources/bootstrap.js"></script>
<script type="text/javascript" src="resources/ajaxfileupload.js"></script>
<script type="text/javascript" src="venuescript.js"></script>

</body></html>