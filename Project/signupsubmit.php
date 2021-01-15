<?php
	include_once 'assets/connectdb.php';
	include_once 'assets/validation.php';
	include_once 'assets/redirect.php';
	session_start();
	function err($field)
	{
		echo "Illegal or no input to ".$field." field. Enter proper ".strtoupper($field)." for proper submission.<br> To go back to SignUp form <h4><a href='signup.php'>CLICK HERE</a></h4>";
	}
	
	if(notEmpty($_POST["usernamesignup"])=='T' && validatePlainText($_POST["usernamesignup"])=='T')
	{
		$name=$_POST["usernamesignup"];
		if(notEmpty($_POST["addresssignup"])=='T' && validateNullBs($_POST["addresssignup"])=='T')
		{
			$add=$_POST["addresssignup"];
			if(notEmpty($_POST["contactnumbersignup"])=='T' && validatePhoneNumbers($_POST["contactnumbersignup"])=='T')
			{
				$ph=$_POST["contactnumbersignup"];
				if(notEmpty($_POST["birthdatesignup"])=='T' && validateNullBs($_POST["birthdatesignup"])=='T')
				{
					$dob=$_POST["birthdatesignup"];
					if(notEmpty($_POST["registrationsignup"])=='T' && validateNumbers($_POST["registrationsignup"])=='T')
					{
						$reg=$_POST["registrationsignup"];
						if(notEmpty($_POST["emailsignup"])=='T' && validateNullBs($_POST["emailsignup"])=='T')
						{
							$em=$_POST["emailsignup"];
							if(notEmpty($_POST["passwordsignup"])=='T' && validatePw($_POST["passwordsignup"])=='T')
							{
								$pw=$_POST["passwordsignup"];
								$query1="INSERT INTO student_reg (UserName,StudentName, Address , BirthDate , ContactNumber , Email , Password, reg) VALUES ('".$name.$em."','".$name."','".$add."','".$dob."','".$ph."','".$em."','".$pw."','".$reg."')";
								$result1=mysqli_query($db,$query1);
								$qin="SELECT StudentId FROM student_reg WHERE Email='".$em."'";
								$resin=mysqli_query($db,$qin);
								$rowin=mysqli_fetch_array($resin);
								$query2="INSERT INTO student_education (StudentId, Qualified_examinations, University , PassingYear , Percentage) VALUES ('".$rowin['StudentId']."','10th','Unknown','Unknown','0')";
								$result2=mysqli_query($db,$query2);
								$dip=$_POST['diploma'];
								$myquery="INSERT INTO user_role (StudentId, Role) VALUES ('".$rowin['StudentId']."', '".$dip."')";
								$myresult=mysqli_query($db, $myquery);
								$_SESSION["role"]=$dip;
								if($result2) echo "Xth Successful";
								else echo "Xth Unsuccessful: ".mysqli_error($db);
								if($dip=='yes')
								{
									$query3="INSERT INTO student_education (StudentId,Qualified_examinations, University , PassingYear , Percentage) VALUES ('".$rowin['StudentId']."','Diploma','Unknown','Unknown','0')";
									$result3=mysqli_query($db,$query3);
									
								if($result3) echo "Dip Successful";
								else echo "Dip Unsuccessful: ".mysqli_error($db);
								}
								else
								{
									$query3="INSERT INTO student_education (StudentId,Qualified_examinations, University , PassingYear , Percentage) VALUES ('".$rowin['StudentId']."','12th','Unknown','Unknown','0')";
									$result3=mysqli_query($db,$query3);
									
								if($result3) echo "XIIth Successful";
								else echo "XIIth Unsuccessful: ".mysqli_error($db);
								}
								
								
								if($result1)
								{								
									echo "You have successfully signed up!<br>Redirecting you to loginpage in 3 seconds....<br>";
									goToPage("Login","index.php");
								}
								else
								{
									echo "Some ERROR Occured A!! ".mysqli_error($db).".<br>Kindly fill Signup form again.<br>To go back to SignUp form <h4><a href='signup.php'>CLICK HERE</a></h4>";
								}
							}
							else
							{
								err("Password");
							}
						}
						else
						{
							err("Email");
						}
					}	
					else
					{
						err("Roll Number");
					}
				}
				else
				{
					err("Date of Birth");
				}
			}
			else
			{
				err("Contact Number");
			}
		}
		else
		{
			err("Address");
		}
	}
	else
	{
		err("Name");
	}
				
	include_once 'assets/close.php';
?>