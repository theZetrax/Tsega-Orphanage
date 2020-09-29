<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./script/css/bootstrap.min.css">
	<title>Tsega Charity | {% block title %} {% endblock %}</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ urlFor('home') }}">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ urlFor('home') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ urlFor('impact.home') }}">Impact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ urlFor('news.home') }}">News</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ urlFor('contact') }}">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://www.gofundme.com">Donate</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	{% block content %}{% endblock %}

	<footer class="page-footer font-small blue pt-4 bg-dark text-white">

		<div class="container-fluid text-center text-md-left">

			<div class="row">

				<div class="col-md-6 mt-md-0 mt-3">

					<h5 class="text-uppercase">Tsega Charity</h5>
					<p>Here you can use rows and columns to organize your footer content.</p>

				</div>

				<hr class="clearfix w-100 d-md-none pb-3">

				<div class="col-md-3 mb-md-0 mb-3">

					<h5 class="text-uppercase">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>

				<div class="col-md-3 mb-md-0 mb-3">

					<h5 class="text-uppercase">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>

			</div>

		</div>

		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://www.gofundme.com/"> Go To #GoFundMe</a>
		</div>

	</footer>

	<script src="./script/js/jquery.min.js"></script>
	<script src="./script/js/popper.js"></script>
	<script src="./script/js/bootstrap.min.js"></script>
</body>

</html>