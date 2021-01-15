<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dash.php">Setting Panel </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
					<a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
				</li>
                <li class="dropdown">
                    <a href="dash.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["ad004"]; ?> </b></a>
                </li>
            </ul>
            
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					<li>
                        <a href="dash.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<?php if($_SESSION["ad004"]=="admin" || $_SESSION["ad004"]=="Event Co-ordinator"){ ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-calendar"></i> Manage News <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="insert_news.php">Insert News</a>
                            </li>
                            <li>
                                <a href="delete_news.php">Delete News</a>
                            </li>
                        </ul>
                    </li>
					<?php } ?>
					<?php if($_SESSION["ad004"]=="admin" || $_SESSION["ad004"]=="Placement Co-ordinator"){ ?>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#interviews"><i class="fa fa-fw fa-info"></i> Manage Interviews <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="interviews" class="collapse">
                            <li>
                                <a href="insert_interview.php">Insert Interview</a>
                            </li>
                            <li>
                                <a href="delete_interview.php">Delete Interview</a>
                            </li>
                        </ul>
                    </li>
					<?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>