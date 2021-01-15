		<div id="wrapper">
		   <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
						<div class="edit"><a href="edit.php" title="Edit Profile"><span class="icon icon-pencil"></span></a></div>
                            <div id="image" class="portrate hidden-xs"></div>
							<script language="javascript">
							document.getElementById("image").style.backgroundImage = <?php echo json_encode("url('img/nopic.jpg')"); ?>
						</script>
                            <div class="title">
                                <h2><?php echo $_SESSION["var002"]; ?></h2>
                                <h3><?php echo $_SESSION["role"]; ?></h3>
                            </div>
                            
                        </div>
						
						<!--Sidebar-->
                        <ul id="navigation">
                            <li>
                              <a href="#news">
                                  <div class="icon icon-calendar"></div>
                                  <div class="text">News Update</div>
                              </a>
                            </li>		
							<li>
                              <a href="#biography">
                                <div class="icon icon-user"></div>
                                <div class="text">About Me</div>
                              </a>
                            </li>  
                            
                            <li>
                              <a href="#research">
                                <div class="icon icon-globe"></div>
                                <div class="text">Industrial Background</div>
                              </a>
                            </li> 

                            <li>
                              <a href="#teaching">
                                <div class="icon icon-book"></div>
                                <div class="text">Education</div>
                              </a>
                            </li>

							<li>
                              <a href="#contact">
                                <div class="icon icon-phone"></div>
                                <div class="text">Contact</div>
                              </a>
                            </li> 
							
                            <li class="external">
                              <a href="#">
                                  <div class="icon icon-upload-alt"></div>
                                  <div class="text">Upload CV</div>
                              </a>
                            </li>
							<li class="external">
                              <a href="logout.php">
                                  <div class="icon icon-power-off" style="color: #f20000"></div>
                                  <div class="text">Logout</div>
                              </a>
                            </li>
                        </ul>
                    </div>        
                </div>
                
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>    
            </div>