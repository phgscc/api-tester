<!DOCTYPE html>
	<head>
		<!-- MaterializeCSS [materializecss.com] -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<title>PHGSCC API TESTER</title>

	</head>
	<style>
		.input-field-custom {
			border-style: solid !important;
			border-width: 1px 1px !important;
			border-color: grey !important;
			border-radius: 5px !important;

			padding: 4px 20px !important;
		}

		.input-field-custom:focus {
			border-style: solid !important;
			border-width: 4px 4px !important;
			border-color: #00cc66 !important;
			border-radius: 5px !important;

			padding: 3px 18px !important;
		}

		a > i.material-icons {
			font-size: 40px;
			color: #00b386;
		}
	</style>
	<body>
		<nav class="white">
			<div clas="nav-wrapper white">
				<a href="#!" class="brand-logo black-text center">PHGSCC API TESTER</a>
			</div>
		</nav>
		<br>
		<div class="container">
			<div class="row">
				<form class="col s12">
					<div class="row">
						<h5>API Destination</h5>
					</div>
					<div class="row">
						<div class="col l6 s12" style="padding-top: 15px;">
							<input class="input-field-custom col s11" id="api-url" placeholder="API URL">
							<!--  -->
						</div>
						<div class="input-field col l5 s12">
							<select id="api-type">
								<option value="" disabled selected>Choose request type</option>
								<option value="post">POST</option>
								<option value="get">GET</option>
							</select>
						</div>
						<div class="input-field col s1">
							<a href="#!" class="col s1"><i class="material-icons">send</i></a>
						</div>
					</div>
					<div class="row">
						<h5>Parameters</h5>
					</div>
					<table class="striped">
						<thead>
							<tr>
								<th>Parameter Name</th>
								<th>Parameter Value</th>
								<th><a href="#!" class="material-icons">add</a></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No parameters</td><td></td><td></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<footer class="page-footer grey">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">PHGSCC API TESTER</h5>
					</div>
					<div class="col l4 offset-12 s12">
						<p>By Dovi Cowan (<a href="https://phgscc.host" class="white-text"><u>PHGSConnect CENTRAL</u></a>)</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('select').formSelect();
		});
	</script>
</html>