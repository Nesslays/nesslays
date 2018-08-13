<?php
error_reporting( ~E_NOTICE ); // avoid notice
if(isset($_POST['submit'])) {
    
        mysql_connect("localhost", "root", "");
        mysql_select_db("nessydb");
       
}
?>

    <?php
include "top.php";

?>
<br><br><br><br><br>
  <div class="wrapper" style="background-color:">
  <body style="background-color:"> 
     
<div class="col-md-12" style="width:97%;background-color:;margin-left:10px;margin-right:10px;">
 <div class='slider'>
 
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
  <div class='slide4'></div>
</div>
</div>

 
<div class="col-md-4 " style="background-color:">
<link type="text/css" rel="stylesheet" href="tog2.css" />

        <div class="sidebar-nav" style="background-color:silver; width:100%;margin-left:10px;">
                   
            <li  data-toggle="collapse" data-target="#setting" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>WEB SYSTEMS DEVELOPMENT<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="setting">
                    <li><a href="mathsone.php"><i class="fa fa-angle-double-right"></i>High Schools Management sys </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Company Web Sites</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Web Systems Maintenance</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>General Information</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Tracking Information Systems</a></li>
                    </div>

            <li  data-toggle="collapse" data-target="#settings" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>NETWORK INSTALLATION<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settings">
				    <li><a href="addd.php"><i class="fa fa-angle-double-right"></i> Networking Mapping</a></li>
                    <li><a href="addd.php"><i class="fa fa-angle-double-right"></i> Wireless Networking </a></li>
                    <li><a href="Weight.php"><i class="fa fa-angle-double-right"></i>Fibre Optic Networking</a></li>
                    <li><a href="add22.php"><i class="fa fa-angle-double-right"></i>Cabled Networking</a></li>                   
                   
                    </div>

            <li  data-toggle="collapse" data-target="#settingx" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>ICT SERVICES<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settingx">
                    <li><a href="adddc2.php"><i class="fa fa-angle-double-right"></i>ICT Consultations</a></li>
                    <li><a href="Vaccine1.php"><i class="fa fa-angle-double-right"></i>Computer Repair & Maintenance </a></li>
                    <li><a href="polio.php"><i class="fa fa-angle-double-right"></i>Computer Hardware Dealers </a></li>
					<li><a href="polio.php"><i class="fa fa-angle-double-right"></i>ICT Training</a></li>
                    <li><a href="newborndata2.php"><i class="fa fa-angle-double-right"></i>General Information</a></li>
                     </div>
            <li  data-toggle="collapse" data-target="#settingd" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i> COMPUTER GRAPHICS & DESIGNS<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settingd">
                    <li><a href="addd.php"><i class="fa fa-angle-double-right"></i>Logo Designs</a></li>
					<li><a href="Newborndata.php"><i class="fa fa-angle-double-right"></i>Wedding cards design</a></li>
                    <li><a href="vaccine2.php"><i class="fa fa-angle-double-right"></i>Calenders and Posters </a></li>
                    <li><a href="polio.php"><i class="fa fa-angle-double-right"></i>Multi Printing</a></li>
                    <li><a href="Newborndata.php"><i class="fa fa-angle-double-right"></i>Smart cards design</a></li>
					<li><a href="Newborndata.php"><i class="fa fa-angle-double-right"></i>Special design</a></li>
				    </div>
              </div></div>

   

</div>   
</body>
</html>