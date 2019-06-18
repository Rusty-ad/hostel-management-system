<nav class="navbar navbar-inverse" id="nav">
<div class="container-fluid">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  </div>
	 
	 <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $root?>">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $root?>student/login.php">Login</a></li>
            <li><a href="<?php echo $root?>student/signup.php">Registration</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $root?>admin/login.php">Admin</a></li>
        <li><a href="#">About</a></li>
		<li><a href="#">Credits</a></li>
		<form class="navbar-form navbar-left" action="/action_page.php">
		  <div class="input-group">
			<input id="my_anchor" type="text" class="form-control" placeholder="Search">
			<div class="input-group-btn">
			  <button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
			  </button>
			</div>
		  </div>
		</form>
      </ul>
    </div>
</div>
</nav>