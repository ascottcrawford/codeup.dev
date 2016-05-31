<!DOCTYPE html>
<html>
	<head>
		<title>Scott Crawford Resume</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/CSS/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://use.fontawesome.com/70d063044b.js"></script>
		<!-- Private CSS -->
		
		<link rel="stylesheet" href="/CSS/personalsite.css">
	</head>
	<body>
	<div>		
			<ul class="nav nav-pills">
			   <li role="presentation" class="active"><a href="/personallanding.html">Home</a></li>
			  <li role="presentation"><a href="/resume.html">Resume</a></li>
			  <li role="presentation"><a href="/portfolio.html">Portfolio</a></li>
			  <li role="presentation"><a href="/contact.php">Contact</a></li>
			  <li role="presentation"><a href="/register.php">Register</a></li>
			  <li role="presentation"><a href="/login.php">Login</a></li>
			</ul>
	</div>
		<div class="container">
			<div class="row">
        		<div class="col-md-4 col-md-offset-4">
            		<div class="panel panel-default">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Welcome, please login.</h3>
                		</div>
                		<div class="panel-body">
                    	<form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="button" class="btn btn-success btn-block">Login</button>
                            <p>New Member? <a href="/register.php" class="">Please Register</a></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	</body>
</html>