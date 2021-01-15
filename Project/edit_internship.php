<!DOCTYPE html>
<?php
	session_start();
	include_once 'assets/connectdb.php';
	include_once 'assets/validation.php';
	
	$res=mysqli_query($db,"SELECT * FROM project WHERE student_id='".$_SESSION["var003"]."'");
	
	function display($row)
	{
		echo "<table width='100%' bgcolor='#fff'>";
		echo "<tr><td><input type='radio' name='select' value='".$row['internship_id']."'> Select Internship -> ".$row['company']."</td></tr>";
		echo "<tr><td>".$row['month']." / ".$row['year']."</td></tr>";
		echo "<tr><td>".$row['details']."</td></tr>";
		echo "</table>";
		echo "<br>";
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
<table width="100%" class="formHead"><tr><td width="70%"><h2>Update Internship Details</h2></td><td align="right" width="30%"><a href="user.php" title="Go back to Profile"><h2><span class="btn icon icon-arrow-left"></span></h2></a></td></tr></table>
<div id="instructions">
<h4>INSTRUCTIONS:</h4>
<p>You are given a form to update your profile. Use the fields to update profile information.</p>
</div>
<p id="response" style="color:#9f0000">&nbsp;</p>

 <form method="post" action="" name="UpdateInfo">
<fieldset>
<legend><span class="number">1</span> Company</legend>
<input type="text" id="nm" name="nm" placeholder="Company Name *">
</fieldset>
<fieldset>
<legend><span class="number">2</span> Month</legend>
<input type="text" id="mnth" name="mnth" placeholder="Month *">
</fieldset>
<fieldset>
<legend><span class="number">3</span> Year</legend>
<input type="text" id="yr" name="yr" placeholder="Year *">
</fieldset>
<fieldset>
<legend><span class="number">4</span> Details (max. 500 chars)</legend>
<textarea id="details" name="details" maxlength="500" rows="8"></textarea>

<input type="submit" value="Add Internship" name="update" />
<input type="submit" value="View Internships" name="view" />
</form>
<?php
	if(isset($_POST['update']))
	{
		
		if(isset($_POST['nm']) && validateNullBs($_POST['nm'])=='T')
		{
			$nm=$_POST['nm'];
			if(isset($_POST['mnth']) && validatePlainText($_POST['mnth'])=='T')
			{
				$mnth=$_POST['mnth'];
				if(isset($_POST['yr']) && validateNumbers($_POST['yr'])=='T')
				{
					$yr=$_POST['yr'];
					if(isset($_POST['details']) && validateNullBs($_POST['details'])=='T')
					{
						$det=mysqli_real_escape_string($db,$_POST['details']);
						$result=mysqli_query($db,"INSERT INTO project (student_id,company,month,year,details) VALUES ('".$_SESSION["var003"]."','".$nm."','".$mnth."','".$yr."','".$det."')");
						if($result) 
						{ 
							?>
							<script language="javascript">
								document.getElementById("response").innerHTML="Update Successful!";
							</script>
							<?php 
						}
						else 
						{ 
							?>
							<script language="javascript">
								document.getElementById("response").innerHTML="Unsuccessful "+<?php echo json_encode(mysqli_error($db));?>;
							</script>
							<?php
						}
					}
					else
					{
						?>
						<script language="javascript">
							document.getElementById("response").innerHTML="Unsuccessful: Details field not filled properly."?>;
						</script>
						<?php
					}
				}
				else
				{
					?>
					<script language="javascript">
						document.getElementById("response").innerHTML="Unsuccessful: Year field not filled properly."?>;
					</script>
					<?php
				}
			}
			else
			{
				?>
				<script language="javascript">
					document.getElementById("response").innerHTML="Unsuccessful: Month field not filled properly."?>;
				</script>
				<?php
			}	
		}
		else
		{
			?>
			<script language="javascript">
				document.getElementById("response").innerHTML="Unsuccessful: Company field not filled properly."?>;
			</script>
			<?php
		}
	}
	
	if(isset($_POST['view']))
	{
		if(mysqli_num_rows($res)>=1)
		{
			while(($rows=mysqli_fetch_array($res))!=NULL)
				display($rows);
			echo "<input type='submit' value='Delete Internship' name='delete'>";
		}
		else
		{
			echo "No Internships to Display";
		}
	}
	
	if(isset($_POST['delete']))
	{
		$sel=$_POST['select'];
		$delQ=mysqli_query($db,"DELETE FROM project WHERE internship_id='".$sel."'");
		if($delQ) 
		{ 
			?>
			<script language="javascript">
				document.getElementById("response").innerHTML="Internship Successfully Deleted";
			</script>
			<?php 
		}
		else 
		{ 
			?>
			<script language="javascript">
				document.getElementById("response").innerHTML="Delete Unsuccessful: "+<?php echo json_encode(mysqli_error($db));?>;
			</script>
			<?php
		}
	}
?>
</div>
</div>
</body>
</html>