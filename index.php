<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Game theory Homework - Andreea Fodor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css?=v<?=time();?>" />
		<?php require_once( 'functions.php' ); ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Assignment 1 - Exercise 2 </h1>
					<hr>
				</div>
				<div class="col-sm-12">
					<div id="main-content text-center">
						<p class="text-center">Set problem parameters:</p>
						<form class="form-inline text-center">
							<div class="form-group">
								<input type="number" class="form-control" id="doors_N" placeholder="number of doors (N)">
							</div>
							<div class="form-group">
								<input type="number" class="form-control" id="loops" placeholder="number of loops (K)">
							</div>
							<button type="submit" id="calculate_p" class="btn btn-primary">Calculate</button>
						</form>
					</div>
					<div id="results"></div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>