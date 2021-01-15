<?php
	$queryInfo="SELECT `StudentName`, `Qualification`, `Branch`, `Gender`, `BirthDate`, `Father`, `Mother`, `Interests`, `About`, `Statement` FROM `student_reg` WHERE StudentId='".$_SESSION["var003"]."'";
	
	$resInfo=mysqli_query($db,$queryInfo);
	
	$row=mysqli_fetch_array($resInfo);
?>            
                <div id="biography" class="page">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">
                                    <div class="clearfix visible-sm visible-xs"></div>
                                    <div class="col-sm-12 col-md-10">
                                        <h3 class="title">Basic Info</h3>
                                        <p>
											<table cellpadding="10" cellspacing="10">
												<tr>
													<th>Name:</th>
													<td><?php echo $row['StudentName']; ?></td>
												</tr>
												<tr>
													<th>Father's Name:</th>
													<td><?php echo $row['Father']; ?></td>
												</tr>
												<tr>
													<th>Mother's Name:</th>
													<td><?php echo $row['Mother']; ?></td>
												</tr>
												<tr>
													<th>Date of Birth:</th>
													<td><?php echo $row['BirthDate']; ?></td>
												</tr>
												<tr>
													<th>Course:</th>
													<td><?php echo $row['Qualification']; ?></td>
												</tr>
												<tr>
													<th>Branch:</th>
													<td><?php echo $row['Branch']; ?></td>
												</tr>
												<tr>
													<th>Gender:</th>
													<td><?php echo $row['Gender']; ?></td>
												</tr>
												<tr>
													<th>Interests:</th>
													<td><?php echo $row['Interests']; ?></td>
												</tr>
												<tr>
													<th>About:</th>
													<td><?php echo $row['About']; ?></td>
												</tr>
												<tr>
													<th>Career Statement:</th>
													<td><?php echo $row['Statement']; ?></td>
												</tr>
											</table>
										</p>
                                    </div>  
                                    
                                </div>
                            </div>        
                        </div>
                    </div>

                    
                </div>