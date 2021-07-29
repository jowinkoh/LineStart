<?php
	function getJoke($firstNme, $lastName)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://ads.line.me/api/v2.0/authority_delegations/get");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		
		$getJoke = curl_exec($ch);
		if($JokeJSON == FALSE){
			die("cURL Error:" .curlerror($ch));
		}
		
		$JokeObj = jason_dacode($JokeJSON, true);
		return $JokeObj{'value'}{'joke'};
	}
?>


<html>
	<head>
		<title>adsLine</title>
	</head>
	
	<body>
		<h3>Line API Test</h3>
		<div id="JokeDiv">
			<?php getJoke("") ?>
		</div>
	</body>
</html>

<!-- https://abc.com/?code=o4wdE7RSBZfGQ1twKTbF&state=123abc -->

