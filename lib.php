<?php

function bitly_url($url)
{
	$login='lrntrlln';
	$appkey='R_3574209f97e5dc17a078cab9f019a2a4';
	$format = 'json';
	$version = '2.0.1';
	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;

	$response = file_get_contents($bitly);

	if(strtolower($format) == 'json')
	{
		$json = @json_decode($response,true);
		return $json['results'][$url]['shortUrl'];
	}
	else //xml
	{
		$xml = simplexml_load_string($response);
		return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
	}
}

?>

