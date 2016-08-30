<?php
    if(isset($_POST['submit'])){
        $name = $_POST['fname'] . ' ' . $_POST['lname'];
        $email = $_POST['email'];
        $body = "Hello $name,\n\n" .
                "Thank you for signing up, we hope to see you in MBB 316 on Thursdays from 4:30 to 5:30.\n" .
                "You will be added to the ACM mailing list.\n\n" .
                "If you did not mean to sign up or would like to stop receiving emails reply to this message and we will take you off the list.\n\n" .
                "Association for Computing Machinery";
        mail('acm@groupmail.acu.edu','New Member',"We have a new member,\n\nName: $name\nEmail: $email", 'From: New_Member@wildcatacm.org');
        mail($email,'ACM Sign-up',$body,'From: acm@groupmail.acu.edu');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ACU ACM">

    <title>ACU ACM | Join</title>

	<!-- favicon -->
	<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Official Colors
			Light Blue:	#515DFF
			Dark Blue:	#2B2BF7
			Dark Grey:	#2B2B2B
	-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="./index.html"><img class="img-responsive" src="img/acmlogo_small.png" alt="ACM logo"></a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./index.html">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="./under_construction.html">Project Minerva</a>
							</li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contests <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="./pc_2016spring.html">Spring 2016</a></li>
						</ul>
					</li>
					<li><a href="./calendar.html">Calendar</a></li>
					<li><a href="./explainit.php">Explain It</a></li>
					<li><a href="./bylaws.html">Bylaws</a></li>
					<li><a href="./about.html">About & Contact</a></li>
					<li class="active"><a href="./join.php">Join</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
    <!-- Page Content -->
    <div class="content-section-a spacer-top">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Become a Member</h2>
                </div>
                <div class="col-lg-6 col-sm-6">    
                    <h3>When you join you'll have access to:</h3>
                    <ul>
                        <li><p class="follow nomargin">The ACU ACM Newsletter</p></li>
                        <li><p class="follow nomargin">Innovative and collaborative projects</p></li>
                        <li><p class="follow nomargin">Presentations from industry leaders and insiders</p></li>
                        <li><p class="follow nomargin">Recreational events, such as LAN parties</p></li>
                        <li><p class="follow nomargin">Participate in programming contests</p></li>
                    </ul>
                    
                    <h3>Terms and Conditions:</h3>
                    <p class="tab-2 follow nomargin">By clicking on "Sign up" you agree to ACU ACM's Termination of Membership</p>
				    <p class="tab-2 follow nomargin">We will send you news about up coming events, speakers, lessons, and new projects.</p>
				    <p class="tab-2 follow">If you would like to stop receiving messages you may send ACM a message at <em>acm@acu.edu</em> and you will be taken off the list.</p>
                </div>
                
                <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive img-rounded" src="img/computer.jpg" alt="Computer on a table" />
                </div>
            </div>
            
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->	
	
    <div class="content-section-b">

        <div class="container">
			<h3 class="dark-grey">Registration</h3>
            
            <?php
                if(isset($_POST['submit'])){
                    echo "<p class='lead'>Thank you for signing up! You will be added to the mailing list soon.</p>";
                }
            ?>
            
            <div class="row">
                <form action="join.php" method="post">
                    <div class="form-group col-md-6">
                        <label>First</label>
                        <input type="text" name="fname" class="form-control" placeholder="First name">
                    </div>
                
                    <div class="form-group col-md-6">
                        <label>Last</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                    </div>
                
                    <div class="form-group col-lg-12">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="example@example.com">
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </form>
            </div>
            
		    
		    
		    
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="banner">

        <div class="container">
            <div class="row">
				<div class="banner-social-buttons text-center">
					<ul class="list-inline">
						<li>
							<a href="https://twitter.com/wildcatacm" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i></a> <!-- Twitter -->
						</li>
						<li>
							<a href="https://www.facebook.com/wildcatacm/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i></a> <!-- Facebook -->
						</li>
						<li>
							<a href="https://acuacm.slack.com/messages/social/" class="btn btn-default btn-lg"><i class="fa fa-slack fa-fw"></i></a> <!-- Slack -->
						</li>
					</ul>
				</div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<p style="text-align: center;" class="copyright text-muted medium">Copyright &copy; ACU ACM 2016. All Rights Reserved</p>
                </div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p style="text-align: center;" class="copyright text-muted medium">ACU ACM is not affiliated with Abilene Christian University</p>
				</div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
