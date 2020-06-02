<!-- navigation bar -->

 
<nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top">
	<a class="navbar-brand" href="index.php">
		<img src="img/logo.png" id="logo" alt="Logo" style="width:40px;">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>

 
</button>

 
<div class="collapse navbar-collapse" id="collapsibleNavbar">

 
<ul class="navbar-nav">

 
<li class="nav-item">

 
<a class="nav-link active" href="#" id="btnPrjOverview"><i class="fa fa-eye"></i> List Projects</a>

 
</li>

 
<li class="nav-item">

 
<a class="nav-link" href="#" id="btnPrjCreate"><i class="fa fa-plus-square"></i> New Project</a>

 
</li>

 
<div class="divider">&nbsp;</div>

 
<li class="nav-item">

 
<a class="nav-link" href="#" id="btnTskOverview"><i class="fa fa-eye"></i> List Tasks</a>

 
</li>

 
<li class="nav-item">

 
<a class="nav-link" href="#" id="btnTskCreate"><i class="fa fa-plus-square"></i> New Task</a>

 
</li>

 
<div class="divider">&nbsp;</div>

 
<li class="nav-item">

 
<a class="nav-link" href="#" id="btnUsersOverview"><i class="fa fa-eye"></i> List Users</a>

 
</li>

 
<li class="nav-item">

 
<a class="nav-link" href="#" id="btnUserCreate"><i class="fa fa-eye"></i> New User</a>

 
</li>

 
</ul>

 
<ul class="nav navbar-nav navbar-right ml-auto">

 
<li class="nav-item">

 
<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>
 SignIn</a>

 
<ul class="dropdown-menu form-wrapper">

 
<li>

 
<form action="/examples/actions/confirmation.php" method="post">

 
<p class="hint-text">Sign in with your social media account</p>

 
<div class="form-group social-btn clearfix">

 
<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>

 
<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>

 
</div>

 
<div class="or-seperator"><b>or</b></div>

 
<div class="form-group">

 
<input type="text" class="form-control" placeholder="Username" required="required">

 
</div>

 
<div class="form-group">

 
<input type="password" class="form-control" placeholder="Password" required="required">

 
</div>

 
<input type="submit" class="btn btn-primary btn-block" value="Login">

 
<div class="form-footer">

 
<a href="#">Forgot Your password?</a>

 
</div>

 
</form>

 
</li>

 
</ul>

 
</li>

 
<li class="nav-item">

 
<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i class="fa fa-user-plus"></i> SignUp</a>

 
<!--

 
<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>

 
-->

 
<ul class="dropdown-menu form-wrapper">

 
<li>

 
<form action="/examples/actions/confirmation.php" method="post">

 
<p class="hint-text">Fill in this form to create your account!</p>

 
<div class="form-group">

 
<input type="text" class="form-control" placeholder="Username" required="required">

 
</div>

 
<div class="form-group">

 
<input type="password" class="form-control" placeholder="Password" required="required">

 
</div>

 
<div class="form-group">

 
<input type="password" class="form-control" placeholder="Confirm Password" required="required">

 
</div>

 
<div class="form-group">

 
<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>

 
</div>

 
<input type="submit" class="btn btn-primary btn-block" value="Sign up">

 
</form>

 
</li>

 
</ul>

 
</li>

 
</ul>

 
</div>

 
</nav>