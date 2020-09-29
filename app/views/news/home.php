{% extends 'templates/default.php' %}

{% block title %} News {% endblock %}
{% block content %}
	<a href="{{ urlFor('news.first') }}">News 1</a> <br>
	News Home
{% endblock %}