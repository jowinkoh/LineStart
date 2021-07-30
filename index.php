<?php

	function getJoke()
	{
		$data = array(
			'grant_type' => "",
			'code' => "",
			'redirect_uri' => "",
			'client_id' => "",
			'client_secret' => "",
		);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,"https://api.line.me/v2/oauth/accessToken");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/x-www-form-urlencoded'
		));

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		curl_close ($ch);

		print_r($server_output);
	}
?>


<html>
	<head>
		<title>adsLine</title>
	</head>
	
	<body>
		<h3>Line API Test</h3>
		<div id="JokeDiv">
			<?php getJoke(); ?>
		</div>
	</body>
</html>
