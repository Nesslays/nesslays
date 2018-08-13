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
  <body style="background-color:">
  <div class="wrapper" style="background-color: margin-left:20px">
 
     
<div class="col-md-12" style="width:97%;background-color:;margin-left:10px;margin-right:10px;">
 <div class='slider'>
 
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
  <div class='slide4'></div>
</div>
</div>
<div class="col-md-4 " style="background-color:">
<H3 style="color:skyblue;">Nesslays Main Contacts</h3> 

<img class="img-circle" src="images/tech1.jpg"width="30"height="30"><b>&nbsp&nbsp www.nesslays.co.ke
<br>
<img class="img-circle" src="images/p2.png" height="30" width="30">&nbsp&nbsp +254-7-0111-0886 /  +254-7-3484-4586
<br>
<img class="img-circle" src="images/fb.jpg"width="30"height="30">&nbsp&nbsp Nesslay ict innovations
<br>
<img class="img-circle" src="images/twi.jpg"width="30"height="30">&nbsp&nbsp @Nesslays.ict
<br>
<img class="img-circle" src="images/mail.jpg"width="30"height="30">&nbsp&nbsp nesslays@ict.info
<br>
<img class="img-circle" src="images/yu2.jpg"width="30"height="30">&nbsp&nbsp nesslays@-youtube.com</b>


</div> 
</div>   
</body>
</html>