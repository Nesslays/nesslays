<?php
error_reporting( ~E_NOTICE ); // avoid notice
if(isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        mysql_connect("localhost", "root", "");
        mysql_select_db("nessydb");
		
        $username = $_POST['username'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $email = $_POST['email'];
     
		
//        $description = $_POST['description'];
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
		$imgFile = $_FILES['userImage']['name'];
		$imgSize = $_FILES['userImage']['size'];
		
	
			$upload_dir = 'user_image/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($upload_dir,$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
	{
  
		{
        $sql = "INSERT INTO admin(imageType ,imageData,username,password,phone_no,email)VALUES('{$imageProperties['mime']}','$imgData','$username','$password','$phone_no','$email')";
        $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
        if (isset($current_id)) 
			{
				echo "<script language='JavaScript'>
                      alert ('Success')
                       history.back();
                         </script>";
						 header('location:index.php');
}	
		
			else
			{
				echo "<script language='JavaScript'>
                      alert ('Can NOT process your request please')
                       history.back();
                         </script>";
}
}
}
}
?>