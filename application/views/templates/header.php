<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">

	<title>Blog</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() . 'add'; ?>"> Add New Post</a>
				</li>
				<?php if ($this->session->logged_in) { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() . 'logout'; ?>" tabindex="-1" aria-disabled="true">Logout</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><?= $this->session->fullname; ?></a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() . 'login'; ?>" tabindex="-1" aria-disabled="true">Login</a>
					</li>
				<?php } ?>
			</ul>
			<form class="form-inline my-2 my-lg-0" method="post" action="<?= base_url(); ?>search">
				<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container mt-5">
