<!DOCTYPE html>
<html>
<head>



	<title>HQStudio & Stationary</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		

		#cardeffect {
	margin: 0px 0px 35px 0px;
	padding: 0 0 15px 0px;
	border-radius: 5px;
	overflow: hidden;
	background: #fff;
	-moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	-o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}


		#cardeffect:hover {
	-webkit-transform: translate(0, -4px);
	-moz-transform: translate(0, -4px);
	-ms-transform: translate(0, -4px);
	-o-transform: translate(0, -4px);
	transform: translate(0, -4px);
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
}


	#sideBar{

		width: 300px;
		background-color: white;
		height: 1000px;
		box-shadow: 2px 1px 5px 0px rgba(171,171,171,0.75);
		padding-left: 10px;
	}

	</style>

</head>
<body>
<nav class="navbar navbar-expand-lg"

	style="background-color: #60ff3b; color: white;" 
	>
  <a class="navbar-brand" href="#"><font color="white"><b><u>HQ Studio & Stationary</u></b></font></a>
  [Admin Page]
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>


<center>

<br>
<br>
<br>
<h3>Silahkan Login Sebagai Admin</h3>
<hr style="width: 50%;">
	


<br>
<form action="proses_login.php" method="post">



	
<input style="width: 60%" type="text" class="form-control" name="username" placeholder="Username" / >
<br>

<input style="width: 60%" type="password" class="form-control" name="password" placeholder="Password" / >
<br>
<br>
<input style="width: 20%" type="submit" class="form-control" value="Login">



</form>







</center>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>