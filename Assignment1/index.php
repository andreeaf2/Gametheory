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
					<p> Consider N doors. There is a gift behind one of the doors. You have to choose one<br>
door in the first step. The door is not opened for you. N-2 doors without the gift are opened.<br>
There are left two doors: the one you indicated in the first step and another one.</p><br>
<p>In second step you are asked to choose between the following two strategies (the door you<br>
mention in the second step will be finally opened and if it has the gift behind then you are a
winner):</p><br>
<p><b>Strategy 1</b>: Keep the same door you have chosen in the first place.<br>
<b>Strategy 2:</b> Change initial choice door with the other one left unopened.</p>


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
