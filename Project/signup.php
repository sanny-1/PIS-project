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
    	<h1>Registration form<span>for placement portal</span></h1>
	</header>
    <section>				
	    <div id="container_demo" >
            <div id="wrapper">
               <div class="form">
                        <form action="signupsubmit.php" autocomplete="on" name="signUp" method="post"> 
                            <h1> Sign up </h1> 
                            <p> 
                            <label for="usernamesignup" class="uname" data-icon="u"> Name</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="yourname" />
                            </p>
							<p> 
                            <label for="emailsignup" class="youmail" data-icon="e" > Email address</label>
                            <input id="emailsignup" name="emailsignup" required="required" onblur="validate_email(this,'emsignup')" type="email" placeholder="yourrmail@mail.com"/> 
                            </p>
                            <p>
                            <label for="addresssignup" class="youadd" data-icon="u" > Residence address</label>
                            <input id="addresssignup" name="addresssignup" required="required" type="text" placeholder="yourpermanentaddress"/> 
                            </p>
                            <p> 
                            <label for="contactnumbersignup" class="youcon" data-icon="u">Contact number</label>
                            <input id="contactnumbersignup" name="contactnumbersignup" required="required" onblur="validate_phone(this,'phoneerror')" type="text" placeholder="94******86" />
                            </p>
							<p id="phoneerror"></p>
                            <p> 
                            <label for="birthdatesignup" class="youdob" data-icon="u">Date of birth</label>
                            <input id="birthdatesignup" name="birthdatesignup" required="required" type="date" placeholder="dd/mm/yy" />
                            </p>
                            <p> 
                            <label for="registrationsignup" class="youreg" data-icon="u">Roll number/Registration No.</label>
                            <input id="registrationsignup" name="registrationsignup" required="required" type="text" placeholder="yourregistrationnumber" />
							
							<label for="registrationsignup" class="youreg"><b>What is your role</b></label>
                            <select id="registrationsignup" name="diploma" required="required"/>
								<option value="Student">Student</option>
								<option value="Placement Co-ordinator">Placement Co-ordinator</option>
								<option value="Event Co-ordinator">Event Co-ordinator</option>
								<option value="admin">admin</option>
							</select>
							
                            </p>
							<p id="emsignup"></p>
                            <p> 
                            <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                            <input id="passwordsignup" name="passwordsignup" required="required" onblur="validate_pass(this,'pwsignup')" type="password" placeholder="********"/>
                            </p>
							<p id="pwsignup"></p>
                            <p> 
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" onkeyup="confirm_password(this,'confirm_pw')" required="required" type="password" placeholder="********"/>
                            </p>
							<p id="confirm_pw"></p>
                            <p class="signin button"> 
							<input type="submit" value="Sign up"/> 
							</p> 
                            <p class="change_link">  
							Already registered ?
							<a href="index.php" class="to_register"> Go and log in </a>
							</p>
                        </form>
                    </div>
					</div>	
                </div>  
            </section>
            </div>
    </body>
</html>