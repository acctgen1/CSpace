<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 270px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1588f6;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav div a {
  padding: 6px 8px 6px 16px;
  display: block;
  height: 50px;
  width: 250px;
}
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #fff;
}

.sidenav div a:hover {
  color:white;
  background:#0971d6;
  margin: 6px 6px;
}

#main {
  background: #F0F3F4;
  margin-left: 200px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

 

</style>
</head>
<body>

<div class="sidenav">
	<div class="card" style="background:#54a6f4; margin: 6px 6px;"> 
		<div class="card-body">
			<div class="row">
				<div class="col-lg-4">
					<figure class="figure">
					  <img src="images/profile.png" class="figure-img img-fluid rounded" alt="Photo">
					</figure>
				</div>
				<div class="col-lg-8">
					<h6 class="text-white"><b>Ayejoto Nelson</b></h6>
					<p><small class="text-white">Freelancer on C-space</small></p>
				</div>
			</div>
		</div>
	</div>
	 <div><a href="#home"><div class="row"><div class="col-lg-3"><i class="fa fa-user" aria-hidden="true"></i></div><div class="col-lg-9">Profile</div></div></a></div>
	  <div><a href="#about"><div class="row"><div class="col-lg-3"><i class="fa fa-bell-o" aria-hidden="true"></i></div><div class="col-lg-9">Notifications</div></div></a></div>
	   <div><a href="#clients"><div class="row"><div class="col-lg-3"><i class="fa fa-briefcase" aria-hidden="true"></i></div><div class="col-lg-9">Openings</div></div></a></div>
	    <div><a href="#contact"><div class="row"><div class="col-lg-3"><i class="fa fa-cogs" aria-hidden="true"></i></div><div class="col-lg-9">Settings</div></div></a></div>
	     <div><a href="#logout"><div class="row"><div class="col-lg-3"><i class="fa fa-sign-out" aria-hidden="true"></i></div><div class="col-lg-9">Log out</div></div></a></div>
	 </div>

<div class="container-fluid" id="main">
<div class="container pt-4">
  <form>
  	<div class="form-group">
  		 <button class="btn btn-secondary" type="button" style="margin-bottom: -60px;">
        <i class="fa fa-search"></i>
      </button><input type="text" name="search" placeholder="Search for job openings" class="form-control w-50" style="margin-left: 35px;">
  	</div>
  </form>
 <h3>240 Jobs</h3>
</div>
<div class="row" style="margin-left: 100px;">
	<div class="col-lg-6">
	<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-2">
					<figure class="figure">
					  <img src="images/profile.png" class="figure-img img-fluid rounded" alt="Photo">
					</figure>
			</div>
			<div class="col-lg-6">
				<p><h1>Quickteller</h1></p>
				<p><h5 class="text-secondary">Front-end Developer</h5></p>
				<p><h5 class="small text-secondary">Lagos, Nigeria</h5></p>
			</div>
			<div class="col-lg-4">
				<p><small class="text-secondary">34 Copied</small></p>
				<p><button type="button" class="btn btn-primary"><a href="#" style="text-decoration: none;"><h5 class="text-white">Apply Now</h5></a></button></p>
			</div>
		</div>
		
	</div>
	
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-2">
					<figure class="figure">
					  <img src="images/profile.png" class="figure-img img-fluid rounded" alt="Photo">
					</figure>
			</div>
			<div class="col-lg-6">
				<p><h1>O'bounce Technologies</h1></p>
				<p><h5 class="text-secondary">Software Engineer</h5></p>
				<p><h5 class="small text-secondary">Oyo, Nigeria</h5></p>
			</div>
			<div class="col-lg-4">
				<p><small class="text-secondary">64 Copied</small></p>
				<p><button type="button" class="btn btn-primary"><a href="#" style="text-decoration: none;"><h5 class="text-white">Apply Now</h5></a></button></p>
			</div>
		</div>
		
	</div>
	
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-2">
					<figure class="figure">
					  <img src="images/profile.png" class="figure-img img-fluid rounded" alt="Photo">
					</figure>
			</div>
			<div class="col-lg-6">
				<p><h1>Paystack</h1></p>
				<p><h5 class="text-secondary">Back-end Developer</h5></p>
				<p><h5 class="small text-secondary">Lagos, Nigeria</h5></p>
			</div>
			<div class="col-lg-4">
				<p><small class="text-secondary">2 Copied</small></p>
				<p><button type="button" class="btn btn-primary"><a href="#" style="text-decoration: none;"><h5 class="text-white">Apply Now</h5></a></button></p>
			</div>
		</div>
		
	</div>
</div>
	</div>
</div>

</div>
</body>
</html> 
