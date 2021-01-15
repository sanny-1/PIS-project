<?php
	include_once 'assets/connectdb.php';
	$q="SELECT * FROM manage_news";
	$res=mysqli_query($db,$q);

	function newsUpdate($row)
	{
		echo "<li>
				<div class='row'>
					<div class='col-sm-6 col-md-2'>
						<div class='dates'>
							<span>".$row['newsdate']." ".$row['newsmonth']."</span>
							<span>2005</span>
						</div>
					</div>
					<div class='col-sm-6 col-md-9'>
						<div class='meta newsLink'>
							<h3><a>".$row['News']."</a></h3>
							<p><em>Published on: </em>".$row['publishdate']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='icon icon-plus-sign-alt' onclick='this' style='color: #00000; font-size: 1.5em;'></span></p>
						</div>
					</div>
				</div>
				<div class='details'>
					<p>Hi.....</p>
				</div>
			</li>";
	}
	
	$q1="SELECT * FROM manage_walkin";
	$res1=mysqli_query($db,$q1);
	
	function intUpdate($row)
	{
		echo "<li>
				<div class='row'>
					<div class='col-sm-6 col-md-6'>
						<div class='dy'>
							<span class='degree'>".$row['InterviewDate']."</span>
							<span class='year'>".$row['InterviewTime']."</span><br>
						</div>
					</div>
					<div class='col-sm-6 col-md-6'>
						<div class='meta description'>
							<p class='waht'>".$row['CompanyName']."</p>
							<p class='where'>".$row['JobTitle']."</p>
						</div>
					</div>
				</div>
				<div class='details'>
					<p>Hi.....</p>
				</div>
			</li>";
	}
?>

 
			<div id="main">    
                <div id="news" class="page home" data-pos="home">
                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
										<div class="title text-center">
                                            <h3>News Updates</h3>
                                        </div><marquee direction="up"  onmouseover="this.stop()" onmouseout="this.start()" height="400px">
                                        <ul class="ul-dates ul-withdetails">
                                            
                                           <?php 
										   if(mysqli_num_rows($res)>=1)
										   {
											while(($row=mysqli_fetch_array($res))!=NULL)
												newsUpdate($row);
											}
											else
											{
												echo "No news to display";
											}
											
										   ?>
                                        </ul></marquee>
									
                                    </div>
									
									<div class="col-md-5">
                                        
                                   	<div class="title text-center">
                                            <h3>Upcoming Interviews</h3>
                                        </div><marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()" height="400px">
                                        <ul class="ul-card ul-withdetails">
                                           
										   <?php 
										   if(mysqli_num_rows($res1)>=1)
										   {
											while(($row=mysqli_fetch_array($res1))!=NULL)
												intUpdate($row);
											}
											else
											{
												echo "No news to display";
											}
											
										   ?>
                                            
                                        </ul></marquee>      
                                </div>    
                            </div>  
                        </div>
                    </div>
                </div>
			</div>