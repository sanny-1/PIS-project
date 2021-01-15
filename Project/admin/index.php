 <?php
	session_start();
	if(!isset($_SESSION["ad001"]) || $_SESSION["ad001"]!==true)
	{
	
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/admin-login.css">
    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
 

<div class="login">
	<h1>Login</h1>
    <form method="post" action="" name="adminLogin">
    	<input type="text" name="user" placeholder="Email" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
	<br>
	<span style="color: #fff; font-weight: bold; text-align: center;">
	<?php
		if(isset($_POST["login"]))
		{
			include_once 'assets/connectdb.php';
			include_once 'assets/validation.php';
			if(isset($_POST['user']) && notEmpty($_POST['user']) && validateUN($_POST['user']))
			{
				$un=mysqli_real_escape_string($db,$_POST['user']);
				if(isset($_POST['pass']) && notEmpty($_POST['pass']) && validatePw($_POST['pass']))
				{
					$pw=mysqli_real_escape_string($db,$_POST['pass']);
					
					$q="SELECT StudentId,StudentName FROM student_reg WHERE Email='".$un."' AND Password='".$pw."'";
					$res=mysqli_query($db,$q) or die("<b>* Login Unsuccessful: ".mysqli_error($db)."</b>");
					if(mysqli_num_rows($res)===1)
					{
						$row=mysqli_fetch_array($res);
						$_SESSION["ad001"]=true;
						$_SESSION["ad002"]=$row['StudentName'];
						$_SESSION["ad003"]=$row['StudentId'];
						header("Location: dash.php");
						$myq="SELECT Role FROM user_role WHERE StudentId='".$_SESSION["ad003"]."'";
						$myres=mysqli_query($db, $myq);
						$myrow=mysqli_fetch_array($myres);
						$_SESSION["ad004"]=$myrow['Role'];
					}
					else{echo "<b>* Invalid login credentials</b>";}
				}
				else{echo "* Illegal or No input in USERNAME field. Please try again!";}
			}
			else{echo "* Illegal or No input in USERNAME field. Please try again!";}
		}
	?>
	</span>
</div>

	
    
        <script src="js/index.js"></script>

    
   
  </body>
</html>
 <?php 
	}

	else
	{
		header("Location: dash.php");
	}
	?>
    
