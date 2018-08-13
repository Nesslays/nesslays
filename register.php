
<html>
    <head>
         <title>Admin Reg</title>
	


			<div  class="wrapper" style="background-color: white">


<body style="background-color: white">
<br>
<center>
<fieldset>
	
	 <b style="color:#7aa609">REGISTRATION FORM FOR ADMINISTRATION</b>
            <form  enctype="multipart/form-data" action="admincon.php" method="POST" class="form-horizontal"    onsubmit="return validation(thisform)">

            	<div class="form-group">
            		<label class="col-sm-4 control-label">Username:</label>
            	<div class="col-sm-5"><input class="form-control" type="text" name="username" placeholder="Enter Username"size="50" required/></div>
            </div>
            	<div class="form-group">
            	<label class="col-sm-4 control-label">Email:</label>
            	<div class="col-sm-5"><input  class="form-control"  type="email" Name="email" placeholder="Enter Email" size="50" required /></div>
            </div>

            <div class="form-group">
            	<label class="col-sm-4 control-label">Phone_No:</label>
            	<div class="col-sm-5"><input  class="form-control"  type="text" Name="phone_no" placeholder="Enter Cell phone" size="50" required /></div>
            </div>
            <div class="form-group">
            	<label class="col-sm-4 control-label">Password:</label>
            	<div class="col-sm-5"><input class="form-control"   type='password' name='password' placeholder="Enter Password" size="50" required /></div>
            </div>


            		<div class="form-group">
            		<label class="col-sm-4 control-label">Upload Image File:</label>
            		<div class="col-sm-5"> <input  name="userImage" type="file" class="inputFile" id="image"  />
            		</div>
              </div>
			   
			  

              <div class="form-group">
		<div class="col-sm-5 col-sm-push-4"><input type="submit"  class="btn btn-primary" name="submit" value="Register">
        </div>
    
	</div>
	<a href="login.php">login</a>
     </form>
	 </center>
	 </fieldset>
		</center>

</div>

 </body>
</html>