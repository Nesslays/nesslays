<html>




<head>
<link type="text/css" rel="stylesheet" href="styleshetx.css" />
<link type="text/css"rel="stylesheet"href="news.css"/>
<link rel="stylesheet" href="static/css/bootstrap.min.css"/>
<link rel="stylesheet" href="static/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="static/css/bootstrap.css" />
<link rel="stylesheet" href="static/css/bootstrap-theme.css" />
<link type="text/css" rel="stylesheet" href="styleshet.css"/>
<script src="static/js/jquery.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.miin.js"></script>

</head>



<link type="text/css" rel="stylesheet" href="slides.css"/>



  <!-- Copyright 2018 Nesslays Technologies // Software's, Inc. All rights reserved.-->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style>
.navbar-light{
	background-color:red;
	float:left;
	margin-left:-1px;
    top:40px;
	position:fixed;
	z-index:9999;
	width:98%;
	
}
</style>
<div class="col-md-12 " style="background-color:white;width:98%;float:left;margin-left:14px; position:fixed;z-index:9999">
<h2 style="color:skyblue;font-size:2vw"><b>Nesslay</b>&nbsp&nbsp<n style="color:green">technologies</n></h2>
</div>
  <div class="col-xs-12" >
<nav class="navbar navbar-light " style=" background:linear-gradient(white 15%,skyblue ) ">

        <?php
 session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("nessydb");
$phone_no=$_SESSION["phone_no"];

$sql = "SELECT imageId FROM admin WHERE phone_no='$phone_no' ORDER BY imageId DESC";
$result = mysql_query($sql);
?>
       <?php
            if ($row = mysql_fetch_array($result)) {
                ?>
          
          
                        <a href="#" >
                          <img   src="maincon.php?image_id=<?php echo $row["imageId"]; ?>" width="40" height="40" class="img-responsive img-circle" />
                        </a>
                          <a  href="picupdate.php?imageId=<?php echo $row['imageId']; ?>" title="clfff" onclick="return confirm('sure to update ?')"><span class="glyphicon glyphicon-delete"></span>Update</a> 
               <br>
                <?php
            }
            mysql_close($conn);
			
            ?> 
			<?php
//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("nessydb");
$phone_no=$_SESSION["phone_no"];
$sql = "SELECT username FROM admin WHERE phone_no='$phone_no'";
$result = mysql_query($sql);
if ( $row = mysql_fetch_array ( $result )) {
echo "<tr>" ;
echo "<td style='font-size:10px'>" . $row [ 'username' ]."</td>"; echo" &nbsp;welcome to your portal";
}
?>


<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainNavBar">
  
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
</button>
<div class="collapse navbar-collapse " id="MainNavBar" >
    <ul class="nav navbar-nav">
                 
      <li class="active"><a href="index.php"><b style="color:;">Home</b></a></li>
      <li><a href="contacts.php"><b style="color:;">Contact Us</b></a></li>
      <li><a href="about.php"><b style="color:;">About Us</b></a></li>
	  <li><a href="services.php"><b style="color:;">services</b></a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
  
       <li><a href="help.php"><b style="color:;">Help</b></a></li>
       </ul>
	
</div>
 </div>

<br><br><br><br><br>


 </html>