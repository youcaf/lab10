<?php
$search = false;

if (isset( $_GET['textstr'] )) {
	searchExactString($_GET['textstr']);
}

function searchExactString($str) {
	$containers = [];
	$getStr= file_get_contents('search.json');
	$dictionary = json_decode($getStr, true);
	foreach ($dictionary as $key => $value) {
		if ( check($key, $str) ) 
			echo '<br>' . $key . '=> ' . $value;
	}
	$search = true;
}

function check($k, $s) {
	return stripos($k, $s, 0) === 0;
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<div><h1 style="text-align:center"> Lab Web 10...Dictionary Search</h1></div>
<form class="form-horizontal">
<fieldset>
<div class="form-group"> 
	<div class="col-md-4">
	</div> 
  <div class="col-md-4">
  <input id="textstr" name="textstr" type="text" placeholder="Enter String" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
	<div class="col-md-5">
	</div>
  <div class="col-md-4">
    <button id="button" name="button" class="btn btn-danger">Search</button>
  </div>
</div>

</fieldset>
</form>
</body>

</html>