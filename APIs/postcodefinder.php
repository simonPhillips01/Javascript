<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Postcode finder</title>

	<!-- Latest compiled and miniied CSS -->
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		
		html, body {
			height: 100%;
			width: 100%;
		}

		.container {
			background-image: url("Maps.jpeg");
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			padding-top: 100px;
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
			font-weight: 300;
		}

		h1 {
			font-size: 300%;
		}

		p {
			padding-top: 15px;
			padding-bottom: 15px;
		}

		button {
			margin-top: 20px;
		}

		.alert {
			margin-top: 20px;
			opacity: 0.8;
			font-weight: bold;
			display: none;
		}

		.row {
			margin: 0;
		}

		.center {
			text-align: center;
		}

		.col-md-6 {
			width: 100%;
		}

		.input-group-addon {
			font-size: 1.8em;
			color: #0E4E82;
		}

		#address {
			height: 45px;
		}

		.marginTopMed {
			margin-top: 50px;
			text-align: center;
		}

		.marginTopSml {
			margin-top: 20px;
		}

		#output {
			display: none;
			opacity: .9;
			font-size: 1.3em;
			color: #897249;
			text-align: center;
		}

		#nooutput {
			display: none;
			opacity: .9;
			font-size: 1.3em;
			text-align: center;
		}

		#detailRow {
			width: 98%;
			float: left;
			/* background-color: #f2f5f8; */
			border-radius: 5px;
			margin: 0 15px 0 15px;
			padding-bottom: 0;
		}

		#map-canvas {
			height: 550px;
			width: 48%;
			margin: 20px 0 0 10px;
			border-radius: 5px;
		}
	</style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse"><!-- Auto scroll page display -->
	
	<div class="container">
		<div class="row"><!-- Row for heading -->
			<h1 class="center">Postcode finder</h1>
		</div>

		<div class="row" id="detailRow"><!-- Row for details -->
			<div class="col-md-6">
				<p class="lead center marginTopMed">Enter an address to get zipcode and location</p>

				<form class="marginTop">
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-map-marker"></span>
						<input type="text" class="form-control" name="address" id="address" placeholder="Ex: 1600 Amphitheatre Parkway, Mountain View, CA"/>
					</div><!-- input-group -->
					<button id="findMyPostcode" class="btn btn-success btn-lg">Find my postcode</button>
				</form>

				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find postcode for that address. Please tr again.</div>
				<div id="fail2" class="alert alert-danger">Could not connect to server. Please tr again.</div>

			</div><!-- col-md-6 -->
		</div><!-- End row -->
		<div id="map-canvas"></div>
	</div><!-- End container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD-SS7vLuDVBYfsFXnSsJtGtcXvQN8uYpw"></script>

</body>
</html>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<!--Last compiled and minified Javascript-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>

$("#findMyPostcode").click(function(event) {
	var = result = 0;
	$(".alert").hide();

	event.preventDefault();
		$.ajax({
		type: "GET",
		url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#')).val())+"&sensor=false&key=AIzaSyD-SS7vLuDVBYfsFXnSsJtGtcXvQN8uYpw"
		datatype: "xml",
		success: processXML,
		error: error
		});
	
	function error() {
		$("#fail2").fadeIn();
	}

	function processXML(xml) {
		$(xml).find("address_component").each(function() {
			if ($(this).find("type").text() == "postal_code") {
				$("#success").html("The postcode you need is"+$(this).find('long_name').text()).fadeIn;
				result = 1;
			}
		})
		
		if (result==0) {
			$("#fail").fadeIn();
		}
	}
})

</script>