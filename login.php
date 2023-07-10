<?php
session_save_path('./temp');
session_start();

	if(isset($_SESSION['login_user'])){
		header('location: index.php');
	}
  
		if(isset($_POST['submit'])){
                        
			$cser= mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
                        if(mysqli_connect_errno())
                       { echo 'error:cant connect to db'.mysqli_connect_error();
                         die();}
			$myusername=mysqli_real_escape_string($cser,$_POST['username']);
			$mypassword = mysqli_real_escape_string($cser,$_POST['password']);
			$sql = "SELECT * FROM users WHERE email = '$myusername' and password = '$mypassword' ";
			$result = mysqli_query($cser,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
		
			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				$_SESSION['role'] = $row['role'];

				header('location: index.php');
exit();

			}
			else {
						$error = "Your Login Name or Password is invalid";
echo $error;
			}
}else{
	
?>
<html>
   <head>
      <title>Σελίδα ειδόδου</title>
      <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
      <div class = "container">
	    <form class = "form-signin" action="login.php" method="post" >
                  <label>UserName/Email  :</label><input type = "text" name = "username"><br/><br/>
                  <label>Password  :</label><input type = "password" name = "password"><br/><br/>
                  <input type = "submit" name ="submit" value = " Login "><br>
        </form>
      </div>
</body>
</html>
	  <?php
	  
}?>
