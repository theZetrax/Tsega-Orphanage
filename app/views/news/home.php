{% extends 'templates/default.php' %}

{% block title %} News {% endblock %}
{% block content %}
	<div class="container">
		<br>
		<div class="card mb-3" >
			<div class="row no-gutters">
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><a href="{{ urlFor('news.first') }}">This is news topic one</a></h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Posted at Nov 13 2001</small></p>
					</div>
				</div>
			</div>
		</div>
	</div>
{% endblock %}