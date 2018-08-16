<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Articles List</title>
	<!-- <link rel="stylesheet" type="text/css" href="http://localhost/blog/assets/css/bootstrap.min.css"> -->
	<!-- Url Helpers:-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>"> 
	<!-- HTML Helpers: -->
	 <!-- link_tag('assets/css/bootstrap.min.css')  -->

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Articles</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor03">
	      <form class="form-inline my-2 my-lg-0 ml-2 navbar-left">
	        <input class="form-control mr-sm-2" type="text" placeholder="Search">
	        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item" >
		        <a class="nav-link" href="#">Login</a>
		      </li>
	      </ul>
	  </div>
	</nav>