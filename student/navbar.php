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
        <li><a href="<?php echo $root?>">Home</a></li>
        <li class="dropdown active">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $root?>student/login.php">Login</a></li>
            <li><a href="<?php echo $root?>student/signup.php">Registration</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $root?>admin/login.php">Admin</a></li>
        <li><a href="#">About</a></li>
		<li><a href="#">Credits</a></li>
      </ul>
    </div>
</div>
</nav>