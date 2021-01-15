<?php

include_once 'header.php';  
if($_SESSION["ad001"]===true && ($_SESSION["ad004"]=="admin" || $_SESSION["ad004"]=="Placement Co-ordinator"))
	{	
	?>

<body>

    <div id="wrapper">

        <?php include_once 'nav.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Insert Interview
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <p>
							<div class="form-style-5">
							<form method="post">
							<fieldset>
							<legend><span class="number">*</span> Company Name</legend>
							<input type="text" name="c_name" placeholder="Enter Name*">
							<legend><span class="number">*</span> Job Title</legend>
							<input type="text" name="j_title" placeholder="Enter Title*">
							<legend><span class="number">*</span> No. of Vacancies</legend>
							<input type="text" name="vac" placeholder="Enter Vacancies*">
							<legend><span class="number">*</span> Minimum Qualification</legend>
							<input type="text" name="qualify" placeholder="Enter Qualification*">
							<legend><span class="number">*</span> Interview Date</legend>
							<input type="date" name="c_date">
							<legend><span class="number">*</span> Interview Time</legend>
							<input type="text" name="c_time" placeholder="HH:mm*">
							</fieldset>
							<input name="update" type="submit" value="Update" />
							</form>
							<?php
								include_once 'assets/connectdb.php';
								include_once 'assets/validation.php';
								if(isset($_POST['update']))
								{
									if(isset($_POST[c_name]) && notEmpty($_POST[c_name])=='T' && validateNullBs($_POST[c_name])=='T')
									{
										$name=mysqli_real_escape_string($db,$_POST[c_name]);
										if(isset($_POST[j_title]) && notEmpty($_POST[j_title])=='T' && validateNullBs($_POST[j_title])=='T')
										{
											$title=mysqli_real_escape_string($db,$_POST[j_title]);
											if(isset($_POST[vac]) && notEmpty($_POST[vac])=='T' && validateNullBs($_POST[vac])=='T')
											{
												$vac=mysqli_real_escape_string($db,$_POST[vac]);
												if(isset($_POST[qualify]) && notEmpty($_POST[qualify])=='T' && validateNullBs($_POST[qualify])=='T')
												{
													$qualify=mysqli_real_escape_string($db,$_POST[qualify]);
													if(isset($_POST[c_date]) && notEmpty($_POST[c_date])=='T')
													{
														$date=$_POST[c_date];
														if(isset($_POST[c_time]) && notEmpty($_POST[c_time])=='T' && validateNullBs($_POST[c_time])=='T')
														{
															$time=mysqli_real_escape_string($db,$_POST[c_time]);
															
															$q="INSERT INTO manage_walkin(CompanyName,JobTitle,Vacancy,MinQualification,InterviewDate,InterviewTime) VALUES ('$name', '$title', '$vac', '$qualify', '$date', '$time')";
															
															$res=mysqli_query($db,$q) or die("<b>Entry Unsuccessful: ".mysqli_error($db)."</b>");
															echo "<b>Data Sucessfully Entered</b>";
														}
														else {echo "<b>Entry Unsuccessful: Problem with TIME field</b>";}
													}
													else {echo "<b>Entry Unsuccessful: Problem with DATE field</b>";}	
												}
												else {echo "<b>Entry Unsuccessful: Problem with QUALIFICATION field</b>";}
											}
											else {echo "<b>Entry Unsuccessful: Problem with VACCANCY field</b>";}
										}
										else {echo "<b>Entry Unsuccessful: Problem with JOB TITLE field</b>";}
									}
									else {echo "<b>Entry Unsuccessful: Problem with COMPANY NAME field</b>";}
								}
							?>
							</div>
															
						</p>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php 
	}
	else
	{
		header("Location: index.php");
	}
?>

