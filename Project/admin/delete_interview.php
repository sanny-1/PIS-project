<?php

include_once 'header.php';  
if($_SESSION["ad001"]===true && ($_SESSION["ad004"]=="admin" || $_SESSION["ad004"]=="Placement Co-ordinator"))
	{	
	?>
<body>
	<script type="text/javascript">
	function deleteConfirm(){
		var result = confirm("Are you sure to delete users?");
		if(result){
			return true;
		}else{
			return false;
		}
	}

	$(document).ready(function(){
		$('#select_all').on('click',function(){
			if(this.checked){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}else{
				 $('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});
		
		$('.checkbox').on('click',function(){
			if($('.checkbox:checked').length == $('.checkbox').length){
				$('#select_all').prop('checked',true);
			}else{
				$('#select_all').prop('checked',false);
			}
		});
	});
	</script>

<body>

    <div id="wrapper">

        <?php include_once 'nav.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Delete News
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <p>
							<?php
								include_once 'assets/connectdb.php';
								if(isset($_POST['bulk_delete_submit']))
								{
									$idArr = $_POST['checked_id'];
									foreach($idArr as $id){
										mysqli_query($db,"DELETE FROM manage_walkin WHERE WalkInId=".$id) or die("<b>Delete unsuccessful: ".mysqli_error($db)."</b>");
									}
									echo "<b>Delete Successful</b>";
								}

							?>		
<?php
	include_once 'assets/connectdb.php';
	$res=mysqli_query($db,"SELECT * FROM manage_walkin");
?>
<body>
<form name="bulk_action_form"  method="post" onsubmit="return deleteConfirm();"/>
    <table class="bordered" cellpadding="10" border="0" style="font-size:1.4em;" width="100%">
        <thead>
        <tr>
            <th width="15%">Select Interview</th>
            <th>Company Name</th>
            <th>Job Title</th>
            <th>Vaccancy</th>
            <th>Date</th>
            <th>Time</th>
         </tr>
        </thead>
        <?php
            if(mysqli_num_rows($res) > 0)
			{
                while($row = mysqli_fetch_assoc($res))
				{
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['WalkInId']; ?>"/></td>        
            <td><?php echo $row['CompanyName']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <td><?php echo $row['Vacancy']; ?></td>
            <td><?php echo $row['InterviewDate']; ?></td>
            <td><?php echo $row['InterviewTime']; ?></td>
            
        </tr> 
        <?php 
			} ?>
			<tr><td>&nbsp;</td></tr>
			<tr><td colspan="6" align="center"><input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/></td></tr>
	<?php
		}else
			{ ?>
				<tr><td colspan="5">No records found.</td></tr> 
        <?php 
			} 
		?>
    </table>
</form>
									
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

