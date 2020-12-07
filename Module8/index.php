<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Module8</title>
	<!-- https://bootstrap-menu.com/demos/fixed-onscroll-sticky.html -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="bg-warning py-2 top-header">
			<div class="container">
				1<br>1<br>1<br>
			</div>
		</div>
		<nav class="navbar w-75 m-auto navbar-expand-lg navbar-dark sticky-top bg-primary">
		  <div class="container">
		  <a class="navbar-brand" href="#">Brand</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav">
				<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
				<li class="nav-item"><a class="nav-link" href="#"> About </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  More items  </a>
				    <ul class="dropdown-menu">
					  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
					  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
					  <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
				    </ul>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown right </a>
				    <ul class="dropdown-menu dropdown-menu-right">
					  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
					  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
				    </ul>
				</li>
			</ul>
		  </div> <!-- navbar-collapse.// -->
		</div><!-- container //  -->
		</nav>
	<header>
		1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>
	<div class="row d-none">
		<div class="col-md-12 mt-2">
			<div class="float-end">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Login
				</button>
			</div>
		</div>
	</div>
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <div type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
      	</div>
      </div>
      <div class="modal-body">
        <form class="form-group" method="post" action="post.php">
			<div class="mb-3">
				<label for="login" class="form-label">Login</label>
				<input id="login" class="form-control shadow" type="text" name="login">
			</div>
			<div class="mb-3">
				<label class="form-label" for="pass">Password</label>
				<input id="pass" class="form-control shadow" type="password" name="pass">
			</div>
			<input id="submit" class="btn w-100 shadow" type="submit" name="">
		</form>
      </div>
    </div>
  </div>
</div> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	// $(document).ready(function () {
	// 	$(document).on('submit','form',function(){
	// 		let $form = $(this);
	// 		$.ajax({
	// 			type: $form.attr('method'),
 //          		url: $form.attr('action'),
 //          		data: $form.serialize(),
	// 			success: function (data) {
	// 				let parsedData = JSON.parse(data);
	// 				console.log(parsedData);
	// 				if (!parsedData['result']) {
	// 					alert(parsedData['error']);
	// 					return ;
	// 				}
	// 				alert('Success login');
	// 			}
	// 		});
	// 		return false;
	// 	});
	// });
	if ($(window).width() > 992) {
	  $(window).scroll(function(){  
	  	let height = $('.top-header').outerHeight();
	  	console.log(height);
	     if ($(this).scrollTop() > height) {
	     	$('.sticky-top').removeClass('w-75');
	     	$('.sticky-top').addClass('w-100');
	      }else{
	      	$('.sticky-top').removeClass('w-100');
	     	$('.sticky-top').addClass('w-75');
	      }   
	  });
} // end if
</script>
</html>