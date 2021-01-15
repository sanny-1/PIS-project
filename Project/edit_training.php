<!DOCTYPE html>
<?php
	session_start();
	include_once 'assets/connectdb.php';
	include_once 'assets/validation.php';
	
	$res=mysqli_query($db,"SELECT * FROM training WHERE student_id='".$_SESSION["var003"]."'");
	
	function display($row)
	{
		echo "<table width='100%' bgcolor='#fff'>";
		echo "<tr><td><input type='radio' name='select' value='".$row['training_id']."'> Select Training -> ".$row['subject']."</td></tr>";
		echo "<tr><td>".$row['about']."</td></tr>";
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
<table width="100%" class="formHead"><tr><td width="70%"><h2>Update Training Details</h2></td><td align="right" width="30%"><a href="user.php" title="Go back to Profile"><h2><span class="btn icon icon-arrow-left"></span></h2></a></td></tr></table>
<div id="instructions">
<h4>INSTRUCTIONS:</h4>
<p>You are given a form to update your profile. Use the fields to update profile information.</p>
</div>
<p id="response" style="color:#9f0000">&nbsp;</p>

 <form method="post" action="" name="UpdateInfo">
<fieldset>
<legend><span class="number">1</span> Subject</legend>
<input type="text" id="nm" name="nm" placeholder="Subject *">
</fieldset>
<fieldset>
<legend><span class="number">2</span> Details (max. 200 chars)</legend>
<textarea id="details" name="details" maxlength="200" rows="8"></textarea>

<input type="submit" value="Add Training" name="update" />
<input type="submit" value="View Trainings" name="view" />
</form>
<?php
	if(isset($_POST['update']))
	{
		
		if(isset($_POST['nm']) && validateNullBs($_POST['nm'])=='T')
		{
			$nm=$_POST['nm'];
			if(isset($_POST['details']) && validateNullBs($_POST['details'])=='T')
			{
				$det=$_POST['details'];
				$result=mysqli_query($db,"INSERT INTO training (student_id,subject,about) VALUES ('".$_SESSION["var003"]."','".$nm."','".$det."')");
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
				document.getElementById("response").innerHTML="Unsuccessful: Details field not filled properly."?>;
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
			echo "<input type='submit' value='Delete Training' name='delete'>";
		}
		else
		{
			echo "No Trainings to Display";
		}
	}
	
	if(isset($_POST['delete']))
	{
		$sel=$_POST['select'];
		$delQ=mysqli_query($db,"DELETE FROM training WHERE training_id='".$sel."'");
		if($delQ) 
		{ 
			?>
			<script language="javascript">
				document.getElementById("response").innerHTML="Training Successfully Deleted";
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