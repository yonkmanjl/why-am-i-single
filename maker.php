<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo rtrim(strtolower($_GET["button"]),"?"); ?></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/styles.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script type="text/javascript">

	     
	function generate() {
	   var reasons = [<?php 
	       $text = trim($_GET['reasons']);
	       $textAr = explode("\n", $text);
	       $textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind
	       
	       foreach ($textAr as $line) {
	           $line = trim($line);
	           $reasonList .= "\"" . $line . "\", ";
	       }
	       
	       $reasonList = rtrim($reasonList, ", ");
	       echo $reasonList
	   ?>];
	   var num = Math.floor((Math.random() * reasons.length));
	   $("#reason").html(reasons[num]);
	}

	   
	</script>
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<button class="btn btn-default" onclick="generate()"><?php echo $_GET["button"]; ?></button>
			<h2><div id="reason">
				
			</div></h2>
		</div>
		<p class="text-right">
            <a href="maker.html">Make another!</a><br />
            <a href="index.html">Go back to "Why am I single?"</a></p>
	</div>
</body>
</html>