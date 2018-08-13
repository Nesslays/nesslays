
<html>
<title>Login</title>

 <div id="myLogin" class="modal fade"  role="dialog" aria-labelledby="myModallabel" aria-hidden="true">
  <div class="modal-dialog">

    
      <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center" >Nesslays User Login</h4>
      </div>
      <div class="modal-body" >
        <form action="loginprocess.php" method="POST" class="form-horizontal">  
    
    <div class="form-group">
      <label for="phone_no" class="control-label">&nbsp;&nbsp;&nbsp; Phone number</label>
      <div class="col-sm-11"><input type="text" class="form-control" name="phone_no" placeholder="Enter phone number">

    </div>
    </div>
      <div class="form-group">
      <label for="password">&nbsp;&nbsp;&nbsp; Password</label>
      <div class="col-sm-11"><input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    </div>
	<center>
    <div class="form-group">
      <input type="submit" class="col-sm-2 col-sm-push-2 btn btn-primary" name="submit" value="Login" />
	 
      <button type="button" class="col-sm-2 col-sm-push-4 btn btn-danger " data-dismiss="modal">Close</button>
    </div><hr>
	<tr><td><td>New User?<a href="register.php">&nbsp; Create New Account</a></td></tr>
	</center>
  </form> 
</div>
</div>
</div>
</center>

</body>
</html>