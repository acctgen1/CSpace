<!DOCTYPE html>
<html>
<head>
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
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
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
  <a href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <a href="#logout">Logout</a>
</div>

<div class="container-fluid" id="main">
<div class="container pt-4">
  <h3 class="text-dark">Dashboard</h3>
</div>
<hr>
<div class="container pt-1">
  <div class="row w-75">
    <div class="col-lg-3 col-sm-6 col-xs-12">
     <a href="" style="text-decoration: none;">
        <div class="card bg-primary shadow-lg border-0">
        <div class="card-body">
          <h6 class="text-center text-white">JOB</h6>
        </div>
      </div>
     </a>
      <br>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12">
      <a href="" style="text-decoration: none;">
        <div class="card bg-success shadow-lg border-0">
        <div class="card-body">
          <h6 class="text-center text-white">SEARCH</h6>
        </div>
      </div>
      </a>
      <br>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12">
      <a href="" style="text-decoration: none;">
        <div class="card bg-warning shadow-lg border-0">
        <div class="card-body">
          <h6 class="text-center text-white">CANDIDATES</h6>
        </div>
      </div>
      </a><br>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12">
      <a href="" style="text-decoration: none;">
        <div class="card bg-danger shadow-lg border-0">
        <div class="card-body">
          <h6 class="text-center text-white">EMPLOYERS</h6>
        </div>
      </div>
      </a><br>
    </div>
  </div>
  <hr>
</div>
</div>
</body>
</html> 
