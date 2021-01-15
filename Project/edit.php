<!DOCTYPE html>
<?php
	session_start();
	include_once 'assets/connectdb.php';
	include_once 'assets/validation.php';
	
	$res=mysqli_query($db,"SELECT StudentName,Address,City,Email,ContactNumber,Qualification,Branch,Gender,BirthDate,Father,Mother,Interests,About,Statement,reg FROM student_reg WHERE StudentId='".$_SESSION["var003"]."'");
	$resX=mysqli_query($db,"SELECT * FROM student_education WHERE StudentId='".$_SESSION["var003"]."' AND Qualified_Examinations='10th'");
	$resXII=mysqli_query($db,"SELECT * FROM student_education WHERE StudentId='".$_SESSION["var003"]."' AND Qualified_Examinations='12th'");
	$resDip=mysqli_query($db,"SELECT * FROM student_education WHERE StudentId='".$_SESSION["var003"]."' AND Qualified_Examinations='Diploma'");
	$dip=false;
	$rows=mysqli_fetch_array($res);
	$rowsX=mysqli_fetch_array($resX);
	if(mysqli_num_rows($resXII)>=1)
	{
		$rowsXII=mysqli_fetch_array($resXII);
	}
	else
	{
		$rowsXII['Percentage']="0";
		$rowsXII['University']="Not Defined";
		$rowsXII['PassingYear']="Unknown";
	}
	if(mysqli_num_rows($resDip)>=1)
	{
		$rowsDip=mysqli_fetch_array($resDip);
		$dip=true;
	}
	else
	{
		$rowsDip['Percentage']="0";
		$rowsDip['University']="Not Defined";
		$rowsDip['PassingYear']="Unknown";
	}
	
?>
<html>
<head>
  <link rel="stylesheet" href="css/formstyle.css ">
  <link rel="stylesheet" href="css/font-awesome.min.css ">
</head>
<body>
<div class="square">
   <div class="form-style-5">
<table width="100%" class="formHead"><tr><td width="70%"><h2>Update Your Details</h2></td><td align="right" width="30%"><a href="user.php" title="Go back to Profile"><h2><span class="btn icon icon-arrow-left"></span></h2></a></td></tr></table>
<div id="instructions">
<h4>INSTRUCTIONS:</h4>
<p>You are given a form to update your profile. Use the fields to update the information shown above them (these are current values).</p>
</div>
<p id="response" style="color:#9f0000">&nbsp;</p>

 <form method="post" action="" name="UpdateInfo">
<fieldset>
<legend><span class="number">1</span> Basic Info</legend>
<label for "nm"><?php echo $rows['StudentName']; ?></label><input type="text" id="nm" name="nm" placeholder="Name *">
<label for "father"><?php echo $rows['Father']; ?></label><input type="text" id="father" name="fnm" placeholder="Father's Name *">
<label for "mother"><?php echo $rows['Mother']; ?></label><input type="text" id="mother" name="mnm" placeholder="Mother's Name *">
<label for "add"><?php echo $rows['Address']; ?></label><input type="text" id="add" name="add" placeholder="Address *">
<label for "city"><?php echo $rows['City']; ?></label><input type="text" id="city" name="city" placeholder="City *">
<label for "em"><?php echo $rows['Email']; ?></label><input type="email" id="em" name="em" placeholder="Email *">
<label for "ph"><?php echo $rows['ContactNumber']; ?></label><input type="text" id="ph" name="ph" placeholder="Contact Number *">
<label for "course"><?php echo $rows['Qualification']; ?></label><input type="text" id="course" name="course" placeholder="Qualification *">
<label for "branch"><?php echo $rows['Branch']; ?></label><input type="text" id="branch" name="branch" placeholder="Branch *">
<label for "reg"><?php echo $rows['reg']; ?></label><input type="text" id="reg" name="reg" placeholder="Roll Number *">
<label for "gender"><?php echo "<b>Gender:</b> ".$rows['Gender']; ?></label><span class="gender"><input type="radio" id="gender" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;<input type="radio" id="gender" name="gender" value="Female"> Female</span>
<p>&nbsp;</p>
<label for "dob"><?php echo "<b>Date of Birth:</b> ".$rows['BirthDate']." (yyyy-mm-dd)"; ?></label><input type="date" id="dob" name="dob">
<label for "about"><?php echo $rows['About']; ?></label><input type="text" id="about" name="about" placeholder="About *">
<label for "interests"><?php echo $rows['Interests']; ?></label><input type="text" id="interests" name="interests" placeholder="Interests *">
<label for "stmt"><?php echo $rows['Statement']; ?></label><input type="text" id="stmt" name="stmt" placeholder="Career Statement *">
</fieldset>
<fieldset>
<legend><span class="number">2</span> Update Profile Picture</legend>
<input type="file" name="propic">
</fieldset>
<p>&nbsp;</p>

<fieldset>
<legend><span class="number">3</span> Education Info</legend>
<label for "x"><b>Xth Details</b><hr><label for "x"><?php echo $rowsX['Percentage']." %"; ?></label><input type="text" id="x" name="x" placeholder="Xth Percentage *"><label for "xboard"><?php echo $rowsX['University']; ?></label><input type="text" id="xboard" name="xboard" placeholder="Xth Board *"><label for "pxyr"><?php echo $rowsX['PassingYear']; ?></label><input type="text" id="pxyr" name="pxyr" placeholder="Passing Year *"></label>
<p>&nbsp;</p>
<?php
if(!$dip)
{
?>
<label for "xii"><b>XIIth Details</b><hr><label for "xii"><?php echo $rowsXII['Percentage']." %"; ?></label><input type="text" id="xii" name="xii" placeholder="XIIth Percentage *"><label for "xiiboard"><?php echo $rowsXII['University']; ?></label><input type="text" id="xiiboard" name="xiiboard" placeholder="XIIth Board *"><label for "pxiiyr"><?php echo $rowsXII['PassingYear']; ?></label><input type="text" id="pxiiyr" name="pxiiyr" placeholder="Passing Year *"></label>
<?php
}
else
{
?>
<label for "dip"><b>Diploma Details</b><hr><label for "dip"><?php echo $rowsDip['Percentage']." %"; ?></label><input type="text" id="dip" name="dip" placeholder="Diploma Percentage *"><label for "college"><?php echo $rowsDip['University']; ?></label><input type="text" id="college" name="college" placeholder="College *"><label for "pdipyr"><?php echo $rowsDip['PassingYear']; ?></label><input type="text" id="pdipyr" name="pdipyr" placeholder="Passing Year *"></label>
<?php
}
?>
</fieldset>
<p>&nbsp;</p>

<input type="submit" value="Update" name="update" />
</form>
<?php
	if(isset($_POST['update']))
	{
		
		if(isset($_POST['nm']) && validatePlainText($_POST['nm'])=='T')
			$nm=$_POST['nm'];
		else
			$nm=$rows['StudentName'];
			
		if(isset($_POST['fnm']) && validatePlainText($_POST['fnm'])=='T')
			$fnm=$_POST['fnm'];
		else
			$fnm=$rows['Father'];
			
		if(isset($_POST['mnm']) && validatePlainText($_POST['mnm'])=='T')
			$mnm=$_POST['mnm'];
		else
			$mnm=$rows['Mother'];
			
		if(isset($_POST['add']) && validateNullBs($_POST['add'])=='T')
			$add=mysqli_real_escape_string($db,$_POST['add']);
		else
			$add=$rows['Address'];
		
		if(isset($_POST['city']) && validatePlainText($_POST['city'])=='T')
			$city=$_POST['city'];
		else
			$city=$rows['City'];
		
		if(isset($_POST['em']) && validateEmailText($_POST['em'])=='T')
			$em=$_POST['em'];
		else
			$em=$rows['Email'];
		
		if(isset($_POST['ph']) && validatePhoneNumbers($_POST['ph'])=='T')
			$ph=$_POST['ph'];
		else
			$ph=$rows['ContactNumber'];
		
		if(isset($_POST['reg']) && validateNumbers($_POST['reg'])=='T')
			$reg=$_POST['reg'];
		else
			$reg=$rows['reg'];
		
		if(isset($_POST['course']) && validatePlainText($_POST['course'])=='T')
			$course=$_POST['course'];
		else
			$course=$rows['Qualification'];
		
		if(isset($_POST['branch']) && validatePlainText($_POST['branch'])=='T')
			$branch=$_POST['branch'];
		else
			$branch=$rows['Branch'];
			
		if(isset($_POST['gender']))
			$gender=$_POST['gender'];
		else
			$gender=$rows['Gender'];
			
		if(isset($_POST['dob']))
			$dob=$_POST['dob'];
		else
			$dob=$rows['BirthDate'];
			
		if(isset($_POST['city']) && validatePlainText($_POST['city'])=='T')
			$city=$_POST['city'];
		else
			$city=$rows['City'];
			
		if(isset($_POST['about']) && validateNullBs($_POST['about'])=='T')
			$about=mysqli_real_escape_string($db,$_POST['about']);
		else
			$about=$rows['About'];
			
		if(isset($_POST['interests']) && validateNullBs($_POST['interests'])=='T')
			$interests=mysqli_real_escape_string($db,$_POST['interests']);
		else
			$interests=$rows['Interests'];
		
		if(isset($_POST['stmt']) && validateNullBs($_POST['stmt'])=='T')
			$stmt=mysqli_real_escape_string($db,$_POST['stmt']);
		else
			$stmt=$rows['Statement'];
			
		if(isset($_POST['x']) && validateNullBs($_POST['x'])=='T')
			$x=mysqli_real_escape_string($db,$_POST['x']);
		else
			$x=$rowsX['Percentage'];
		
		if(isset($_POST['xboard']) && validatePlainText($_POST['xboard'])=='T')
			$xboard=$_POST['xboard'];
		else
			$xboard=$rowsX['University'];
					
		if(isset($_POST['pxyr']) && validateNumbers($_POST['pxyr'])=='T')
			$pxyr=$_POST['pxyr'];
		else
			$pxyr=$rowsX['PassingYear'];
			
			
		$statement = "UPDATE `student_reg` SET 
		`StudentName`='".$nm."',
		`Address`='".$add."',
		`City`='".$city."',
		`Email`='".$em."',
		`ContactNumber`='".$ph."',
		`Qualification`='".$course."',
		`Branch`='".$branch."',
		`reg`='".$reg."',
		`Gender`='".$gender."',
		`BirthDate`='".$dob."',
		`Father`='".$fnm."',
		`Mother`='".$mnm."',
		`Interests`='".$interests."',
		`About`='".$about."',
		`Statement`='".$stmt."' WHERE StudentId=".$_SESSION["var003"];
		
		
		//"UPDATE student_reg SET StudentName=".$nm.",Father=".$fnm.",Mother=".$mnm.",Address=".$add.",City=".$city.",Email=".$em.",ContactNumber=".$ph.",Qualification=".$course.",Branch=".$branch",Gender=".$gender.",BirthDate=".$dob.",About=".$about.",Interests=".$interests",Statement=".$stmt."	WHERE StudentId=".$_SESSION["var003"].";
		
		$resStmt=mysqli_query($db,$statement);
		if($resStmt) echo "Successful";
		else echo "Unsuccessful ".mysqli_error($db);
		$cls="10th";
		$statementEdu ="UPDATE student_education SET 
											Percentage='".$x."',
											University='".$xboard."',
											PassingYear='".$pxyr."'
											WHERE `StudentId`='".$_SESSION["var003"]."' AND `Qualified_examinations`='10th'";
		$resStmtEdu=mysqli_query($db,$statementEdu);
		
		if(!$dip)
		{
			if(isset($_POST['xii']) && validateNullBs($_POST['xii'])=='T')
				$xii=mysqli_real_escape_string($db,$_POST['xii']);
			else
				$xii=$rowsXII['Percentage'];
				
			if(isset($_POST['xiiboard']) && validatePlainText($_POST['xiiboard'])=='T')
				$xiiboard=$_POST['xiiboard'];
			else
				$xiiboard=$rowsXII['University'];
						
			if(isset($_POST['pxiiyr']) && validateNumbers($_POST['pxiiyr'])=='T')
				$pxiiyr=$_POST['pxiiyr'];
			else
				$pxiiyr=$rowsXII['PassingYear'];
			
			$statementEduX ="UPDATE student_education SET 
									Percentage='".$xii."',
									University='".$xiiboard."',
									PassingYear='".$pxiiyr."'
										WHERE `StudentId`=".$_SESSION["var003"]." AND `Qualified_Examinations`='12th'";
			$resStmtEduX=mysqli_query($db,$statementEduX);
			
		}
		
		else
		{
			if(isset($_POST['dip']) && validateNullBs($_POST['dip'])=='T')
				$dip=mysqli_real_escape_string($db,$_POST['dip']);
			else
				$dip=$rowsDip['Percentage'];
				
			if(isset($_POST['college']) && validatePlainText($_POST['college'])=='T')
				$college=$_POST['college'];
			else
				$college=$rowsDip['University'];
						
			if(isset($_POST['pdipyr']) && validateNumbers($_POST['pdipyr'])=='T')
				$pdipyr=$_POST['pdipyr'];
			else
				$pdipyr=$rowsDip['PassingYear'];
				
			$statementEduD ="UPDATE student_education SET 
									Percentage='".$dip."',
									University='".$college."',
									PassingYear='".$pdipyr."'
										WHERE StudentId=".$_SESSION["var003"]." AND Qualified_Examinations='Diploma'";
			$resStmtEduD=mysqli_query($db,$statementEduD);
			
		}
		
		if($resStmt && $resStmtEdu && ($resStmtEduX || $resStmtEduD)) {?>
			<script language="javascript">
				document.getElementById("response").innerHTML="Update Successful!";
			</script>
			<?php }
		else { ?>
		 
			<script language="javascript">
				document.getElementById("response").innerHTML="Unsuccessful "+<?php echo json_encode(mysqli_error($db));?>;
			</script>
			<?php
			}
			
		
		
	}
?>
</div>
</div>
</body>
</html>