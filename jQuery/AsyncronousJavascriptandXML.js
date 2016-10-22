<!DOCTYPE html>
<html>
<head>
	<title>Asyncronous Javascript and XML</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body>

	<script type="text/javascript">
		$.get("index.html", function(data) {
			alert(data);
		});

		$.ajax({
			url: "index.html"
		}).done(function(data) {
			$("h1").append(data);
		});

		//Regular expressions
		var regex=/great/;
		var string="Regex is great!";
		var result = string.match(regex);
		alert(result);
	</script>
</body>
</html>