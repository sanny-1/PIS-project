  


				<div id="research" class="page">
                    <div class="pageheader">

                        <div class="headercontent">

                            <div class="section-container">
                                <h2 class="title">Industrial Background</h2>
                            
                                <div class="row">
                                    <div class="col-md-8">
									<?php
										$query1="SELECT * FROM training WHERE student_id='".$_SESSION["var003"]."'";
										$res1=mysqli_query($db,$query1);
										$res11=mysqli_query($db,$query1);

										function displayTrainings($row)
										{
											echo "<li>".$row['subject']."</li>";
										}

										function displayTrainingDetails($row)
										{
											echo "<p>".$row['about']."</p>";
										}

										?> 
									<?php
										if(mysqli_num_rows($res1)>=1)
										{
											while(($row=mysqli_fetch_array($res1))!=NULL)
												echo displayTrainingDetails($row);
										}
										else
										{
											echo "No trainings to be displayed";
										}
									?>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="subtitle text-center">
                                            <h3>Trainings</h3>
                                        </div>
                                        <ul class="ul-boxed list-unstyled">
                                           <?php
												if(mysqli_num_rows($res11)>=1)
												{
													while(($row=mysqli_fetch_array($res11))!=NULL)
														echo displayTrainings($row);
												}
												else
												{
													echo "No trainings to be displayed";
												}
											?>
                                        </ul>
                                    </div>
									<a href="edit_training.php">Add a Training</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
										<div class="title text-center">
											<h3>Internships</h3>
										</div>
                                        <ul class="timeline">
                                                    
                                            <?php
											$queryIntern="SELECT * FROM project WHERE student_id='".$_SESSION["var003"]."'";
											$resIntern=mysqli_query($db,$queryIntern);
											
												function displayInternships($row)
												{
													echo "<li class='open'>
                                                <div class='date'>".substr($row['month'],0,3)." ".$row['year']."</div>
                                                <div class='circle'></div>
                                                <div class='data'>
                                                    <div class='subject'>".$row['company']."</div>
                                                    <div class='text row'>
                                                        <div class='col-md-2'>
                                                            <img alt='image' class='thumbnail img-responsive' src='img/Nobel_Prize.png' >
                                                        </div>
                                                        <div class='col-md-10'>".$row['details']."</div>
                                                    </div>
                                                </div>
                                            </li>";
												}
												
												
												if(mysqli_num_rows($resIntern)>=1)
												{
													while(($row=mysqli_fetch_array($resIntern))!=NULL)
														echo displayInternships($row);
												}
												else
												{
													echo "No internships to be displayed";
												}
											?>
                                            

                                        </ul>
                                    </div>
									<a href="edit_internship.php">Add an Internship</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section color-2">
                            <div class="section-container">
                                <div class="title text-center">
                                    <h3>Research Projects</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="ul-withdetails">
										<?php
											$queryProj="SELECT * FROM project WHERE student_id='".$_SESSION["var003"]."'";
											$resProj=mysqli_query($db,$queryProj);
											
												function displayProjects($row)
												{
													echo "<li>
															<div class='row'>
																<div class='col-sm-6 col-md-3'>
																	<div class='image'>
																		<img alt='image' src='img/".$row['path']."'  class='img-responsive'>
																		<div class='imageoverlay'>
																			<i class='icon icon-search'></i>
																		</div>
																	</div>
																</div>
																<div class='col-sm-6 col-md-9'>
																	<div class='meta'>
																		<h3>".$row['title']."</h3>
																		<p>".$row['short_desc']."</p>
																	</div>
																</div>
															</div>
															<div class='details'>
																<p>".$row['description']."</p>
															</div>
														</li>";
												}
												
												
												if(mysqli_num_rows($resProj)>=1)
												{
													while(($row=mysqli_fetch_array($resProj))!=NULL)
														echo displayProjects($row);
												}
												else
												{
													echo "No projects to be displayed";
												}
											?>
                                        </ul>
                                    </div>
									<a href="edit_project.php">Add a Project</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>