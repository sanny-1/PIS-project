				<div id="contact" class="page">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                <h2 class="title">Contact Details</h2>
								
                                <div class="row">
                                  <!--  <div class="col-md-8">
                                        <p>Recent trends in deep-submicron very large-scale integration (VLSI) circuit technology have resulted in new requirements for algorithms in integrated circuit layout. Much of my work centers on new formulations that capture performance and density criteria in the physical layout phases of computer-aided design (CAD). Our results include near-optimal approximation algorithms for such computationally difficult problems as minimum-cost Steiner tree routing, low-skew clock networks, cost-radius tradeoffs, bounded-density trees, circuit probe testing, high-performing Elmore-based constructions, layout density control, and improved manufacturability. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>-->
                                    <div class="col-md-5">
                                        <div class="subtitle text-center">
                                            <h3>Details</h3>
                                        </div>
                                        <ul class="ul-boxed list-unstyled">
											<?php
												include_once 'assets/connectdb.php';
												$q= "SELECT ContactNumber,Address,City,Email,facebook_id,twitter,linkedin FROM student_reg WHERE student_reg.StudentId='".$_SESSION["var003"]."'";
												$res=mysqli_query($db,$q);	
												$row=mysqli_fetch_array($res);
											?>
                                            <li>Contact No:&nbsp<?php echo $row["ContactNumber"];?> </li>
                                            <li>Address: &nbsp <?php echo $row["Address"];?></li>
                                            <li>City: &nbsp <?php echo $row["City"]?></li>
                                            <li>Email: &nbsp <?php echo $row["Email"]?></li>
                                            <li>Facebook: &nbsp <?php echo $row["facebook_id"]?></li>
                                            <li>Twitter: &nbsp <?php echo $row["twitter"]?></li>
											<li>Linkedin: &nbsp <?php echo $row["linkedin"]?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>