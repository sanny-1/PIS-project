<?php

include_once 'header.php';  
if($_SESSION["ad001"]===true)
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
                            Welcome <?php echo $_SESSION["ad002"]; ?>,
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <p>
							It is the setting panel.<br>You can perform an activity by selecting any of the pages on the side navigation.<br>Select the page and proceed with the activities.<br>
							<br><b><u>Note</u></b> Only following activities are allowed:<br>
							<br><b>Student</b>: No activities are allowed.
							<br><b>Event Co-ordinator</b>: Can manage news.
							<br><b>Placement Co-ordinator</b>: Can manage interviews. 
							<br><b>admin</b>: All activities are allowed.
							<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
