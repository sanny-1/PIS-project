 <?php
	session_start();
	if(!isset($_SESSION["var001"]) || $_SESSION["var001"]!==true)
	{
	
?>

<!DOCTYPE html>
<!--{if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<title>login</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script type="text/javascript" src="js/validation.js"></script>
</head>

<body>
	<div class="container">
    <header>
    	<h1>Login and Registration form<span>for placement portal</span></h1>
	</header>
    <section>				
	    <div id="container_demo" >
            <div id="wrapper">
            	<div id="login" class="animate form">
                	<form  name="login" method="post" action="" autocomplete="on">
                    	<h1>Log in</h1>
                        	<p>
                            <label for="username" class="uname" data-icon="u" > Your email </label>
                            <input id="username" name="username" onblur="validate_email(this,'emailerror')" required="required" type="text" placeholder="yourmail@mail.com"/>
                            </p>
							<p id="emailerror"></p>
                            <p> 
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="*********" /> 
                            </p>
                            <p class="keeplogin"> 
							<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
							<label for="loginkeeping">Keep me logged in</label>
							</p>
							<p id="error">
							</p>
                            <p class="login button"> 
                            <input type="submit" value="Login" name="login"/> 
							</p>
                            <p class="change_link">
							Not registered yet ?
							<a href="signup.php" class="to_register">Sign Up</a>
							</p>
                        </form>
                    </div>
					
					<?php
						session_start();
						include_once 'assets/connectdb.php';
						include_once 'assets/validation.php';
						
						if (isset($_POST['login']))
						{
							if(validateEmailText($_POST['username'])==='T' && notEmpty($_POST['username'])==='T')
							{
								$un=$_POST['username'];
								if(validatePw($_POST['password'])==='T' && notEmpty($_POST['password'])==='T')
								{
									$pw=$_POST['password'];
									
									$query="SELECT StudentName,StudentId FROM student_reg WHERE Email='$un' AND Password='$pw'";
									$result=mysqli_query($db,$query);
									if(mysqli_num_rows($result)===1)
									{
											$row=mysqli_fetch_array($result);	
											$_SESSION["var001"]=true;
											$_SESSION["var002"]=$row['StudentName'];
											$_SESSION["var003"]=$row['StudentId'];
											header('Location: user.php');
									}
									else
									{
										?>
										<script language="javascript">
											p="<b style='color:#8f0000'>Invalid Login Credentials</b>";
											document.getElementById('error').innerHTML=p;
										</script>
										<?php
									}
								}
								else
								{
									echo "<b>Invalid Login Credentials</b>";
								}
								
							}
							else
							{
								echo "<b>Invalid Login Credentials</b>";
							}
							
						}
					?>
						
                </div>  
            </section>
            
        </div>
    </body>
</html>

<?php 
	}

	else
	{
		header("Location: user.php");
	}
	?>