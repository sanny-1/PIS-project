<?php
	include_once 'assets/connectdb.php';
 //if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $q= "SELECT * FROM student_education WHERE student_education.StudentId='".$_SESSION["var003"]."'";
	$res= mysqli_query($db,$q);
}
//else
{
    // goto login page
}
 
 function info($row)
 {
	 echo "<li class='open'>
				<div class='date'>".$row['Qualified_examinations']."</div>
				<div class='circle'></div>
				<div class='data'>
					<div class='subject'>".$row['Percentage']."</div>
					<div class='text row'>
						
						<div class='col-md-10'>
							<strong>".$row['University']."</strong>
						</div>
					</div>
				</div>
			</li>";
				
 }
 ?>
 

				
				
				
				<div id="teaching" class="page">
				<div class="pagecontents">
				<div class="section color-2">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Education</h3>
                                        </div>
                                        <ul class="timeline">
												 <?php 
												if(mysqli_num_rows($res)>=1)
												{
														while(($row=mysqli_fetch_array($res))!=NULL)
															info($row);
												}
												?>
                                            

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				