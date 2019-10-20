<?php
	if(isset($_POST["duuu"])) {
		$connection = new mysqli("localhost", "root", "", "bazadula");
		mysqli_set_charset($connection, "utf8");
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$check = $connection->query("SELECT * FROM `users` WHERE `name`='$name' AND `mail`='$email'");
		if($check->num_rows) {
			echo "you are already registered";
		}
		else {
			$connection->query("INSERT INTO `users`(`name`, `mail`, `password`) VALUES('$name', '$email', '$password')");
		}
	}
?>
	<html>

	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta charset="UTF-8">
		<title>SofART</title>
	</head>

	<body>
		<div class="top">
			<img src="images/Georgia.svg.png" alt="top" class="icon"> /English/
			<select>
				<option value="volvo">GEL</option>
				<option value="saab">$</option>
				<option value="opel">€</option>
				<option value="audi">¥</option>
			</select>
			|
			<img src="images/shopping-cart.png" alt="top" class="icon">Cart &nbsp;
			<img src="images/like.png" alt="top" class="icon">Wish List &nbsp;

			<button id="myBtn">
				<img src="images/avatar.png" alt="icon" class="icon"> Account
				<img src="images/isari.png" alt="isari" class="icon">
			</button>
			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close"> </span>
					<h3>Welcome!</h3>
					<div class="container">

						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
							Registration
						</button>

						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Registration</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form method="POST">
										<div class="modal-body">
											<div class="inputs">
												<div class="name">
													<p>Name:</p>
												</div>
												<input type="text" name="name">
											</div>
											<div class="inputs">
												<div class="email">
													<p>email: </p>
												</div>
												<input type="email" name="email">
											</div>
											<div class="inputs">
												<div class="password">
													<p>password:</p>
												</div>
												<input type="password" name="password">
											</div>
											<input type="radio"> I agree to the processing of personal data
											<br>
											<br>
											<p>Or use social networks</p>
											<img src="images/networks.PNG" alt="networks" class="network">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" name="duuu" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<button type="button" class="btn btn-info">Authorization</button>
					</div>
					<ul>
						<li>My Orders</li>
						<li>Online-Chat</li>
						<li>Basket</li>
						<li>Favourites</li>
						<li>Coupons</li>
					</ul>
				</div>
			</div>
		</div>

		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-nav">
				<a class="navbar-brand" href="#"><img src="images/good_logo.png" alt="logo" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Shop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Orders</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">online-chat</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>
		<img src="images/Low_Poly.png" alt="slideshow" class="slideshow">
		<h1>News</h1>
		<div class="paintings">
			<div class="row mb-3">
				<div class="col-3">
					<img src="images/Figure.jpg" alt="img" class="img-fluid">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/abstract-landscape.jpg" alt="img" class="img-fluid">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/abstract-art.jpg" alt="img" class="img-fluid">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/Bandurka_Pourin.jpg" alt="img" class="img-fluid">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-3">
					<img src="images/cat.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/dance.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/designer-abstract-painting.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/dog.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
			</div>
			<h1>Sales</h1>
			<div class="row mb-3">
				<div class="col-3">
					<img src="images/underwater.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/the-hiding-place-joshua-smith.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/pablo_picasso.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/summer.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-3">
					<img src="images/elefant.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/Flower.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/horse.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
				<div class="col-3">
					<img src="images/the-hiding-place-joshua-smith.jpg" alt="img">
					<div class="content">
						<h1>Heading</h1>
						<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="more mb-3">
			<button type="button" class="see_more">+ see more</button>
		</div>

		<div class="videos">
			<div class="row mb-3">
				<div class="card col">
					<img src="images/video_1.jpg" class="card-img-top" alt="video1">
					<div class="card-body">
						<h5 class="card-title">Video title</h5>
						<p class="card-text">This is a wider video with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card col">
					<img src="images/video_2.jpg" class="card-img-top" alt="video1">
					<div class="card-body">
						<h5 class="card-title">Video title</h5>
						<p class="card-text">This is a wider video with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card col">
					<img src="images/video_3.jpg" class="card-img-top" alt="video1">
					<div class="card-body">
						<h5 class="card-title">Video title</h5>
						<p class="card-text">This is a wider video with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card col">
					<img src="images/video_4.jpg" class="card-img-top" alt="video1">
					<div class="card-body">
						<h5 class="card-title">Video title</h5>
						<p class="card-text">This is a wider video with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card col">
					<img src="images/video_5.jpg" class="card-img-top" alt="video1">
					<div class="card-body">
						<h5 class="card-title">Video title</h5>
						<p class="card-text">This is a wider video with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>

			<footer>
				<div class="container mt-3">
					<div class="d-flex justify-content-around mb-3">
						<div class="p-5">
							<h2><img src="images/logo_2.png" alt="logo" id="logo"> SofART</h2>
							<br/>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sunt ipsum deleniti nemo minus in, veritatis quae dolore earum reprehenderit cupiditate, unde corrupti sapiente officiis alias mollitia repudiandae voluptatum! Eos.</p>
						</div>
						<div class="p-5">
							<p>Parametres</p>
							<img src="images/Layer 2.png" alt="partniorebi">
							<br/>
							<br/>
							<br/>
							<br/>
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
					</div>
				</div>
			</footer>
			<div class="footer-f d-flex justify-content-around">
				<p>©SofART online world of art</p>
				<img src="images/Layer1.png" alt="cards">
			</div>

			<script>
				var modal = document.getElementById('myModal');
				var btn = document.getElementById("myBtn");
				var span = document.getElementsByClassName("close")[0];
				btn.onclick = function() {
					modal.style.display = "block";
				}
				span.onclick = function() {
					modal.style.display = "none";
				}
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>