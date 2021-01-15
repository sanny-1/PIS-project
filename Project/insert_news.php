<?php

include_once 'header.php';  
if($_SESSION["var001"]===true)
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
                            Manage News
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
											<legend><span class="number">*</span> News Title</legend>
											<input type="text" name="news" placeholder="Title *">
										</fieldset>
									
										<fieldset>
											<legend><span class="number">*</span> Description / Details <small>(max. 400 characters)</small></legend>
											<textarea name="details" maxlength="400" rows="5"></textarea>
										</fieldset>
									
										<fieldset>
											<legend><span class="number">*</span> Event Date</legend>
											<table width="100%">
												<tr>
												<td>
												<select name="dateCombo">
												<?php
												$day=1;
												while($day<=31)
												{
													echo "<option value=".$day.">".$day."</option>";
													$day+=1;
												}	
												?>
												</select> 
											</td>
											<td width="1%">&nbsp;</td>
											<td>
												<select name="monthCombo">
												<?php
													include_once 'assets/connectdb.php';
													$qmonth=mysqli_query($db,"SELECT * FROM months");
													while(($rows=mysqli_fetch_array($qmonth))!=NULL)
														echo "<option value=".$rows['month'].">".$rows['month']."</option>";
												?>
												</select> 
											</td>
											<td width="1%">&nbsp;</td>
											<td>
												<select name="yearCombo">
												<?php
												$yr=date('Y');
												$end=$yr+10;
												while($yr<=$end)
												{
													echo "<option value=".$yr.">".$yr."</option>";
													$yr+=1;
												}	
												?>
												</select>
											</td>
										</tr>
									</table>
									</fieldset>
									<input name="update" type="submit" value="Publish News" />
									</form>
									<?php
										
										include_once 'assets/validation.php';
										
										if(isset($_POST['update']))
										{
											if(notEmpty($_POST['news'])=='T' && validateNullBs($_POST['news'])=='T')
											{
												$title=$_POST['news'];
												if(notEmpty($_POST['details'])=='T' && validateNullBs($_POST['details'])=='T')
												{
													$details=mysqli_real_escape_string($db,$_POST['details']);
													$q="INSERT INTO manage_news (News,description,newsdate,newsmonth,newsyear,publishdate) VALUES ('$_POST[news]', '$_POST[details]', '$_POST[dateCombo]', '$_POST[monthCombo]', '$_POST[yearCombo]', NOW())";
													$res=mysqli_query($db,$q);
													if($res)
													{
														echo "<b>News Sucessfully Published<b/>";
													}
													else
													{
														echo "<b>News not Published. Try again!!</b><br>Error: ".mysqli_error($db);
													}
												}
											}

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
		echo"not admin"
		header("Location: index.php");
	}
?>

