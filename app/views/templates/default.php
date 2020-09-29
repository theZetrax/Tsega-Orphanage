<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href= "/tsega-orphanage/public/script/css/bootstrap.min.css">

	<title>Tsega Charity | {% block title %} {% endblock %}</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ urlFor('home') }}">TsegaCharity</a>
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


					<ul class="list-unstyled">
						<li>
							<a href="{{ urlFor('about') }}">About</a>
						</li>
						<li>
							<a href="{{ urlFor('impact.home') }}">Impact</a>
						</li>
						<li>
							<a href="{{ urlFor('news.home') }}">News</a>
						</li>
						<li>
							<a href="https://www.gofundme.com">Donate</a>
						</li>
						<li>
							<a href="{{ urlFor('contact') }}">Contact Us</a>
						</li>
					</ul>

				</div>

				<div class="col-md-3 mb-md-0 mb-3">

					<h5 class="text-uppercase">Follow Us On</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Facebook</a>
						</li>
						<li>
							<a href="#!">Instagram</a>
						</li>
						<li>
							<a href="#!">Linked In</a>
						</li>
						<li>
							<a href="#!">Telegram</a>
						</li>
					</ul>

				</div>

			</div>

		</div>

		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://www.gofundme.com/"> Go To #GoFundMe</a>
		</div>

	</footer>

	<script src="/tsega-orphanage/public/script/js/jquery.min.js"></script>
	<script src="/tsega-orphanage/public/script/js/popper.js"></script>
	<script src="/tsega-orphanage/public/script/js/bootstrap.min.js"></script>
</body>

</html>