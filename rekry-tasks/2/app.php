<?php

require 'vendor/autoload.php';

// TODO: Write a program that fetches the weather from the Yahoo Weather API and ouputs a summary to the console.

PrintWeather('turku');


function PrintWeather($place){
    
    $client = new GuzzleHttp\Client();
    
    $body = $client->get('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22'.$place.'%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys');

    
    $statusCode =  $body->getStatusCode();


    $obj = json_decode($body->getBody(), true);
    
    if(!($obj['query']['results'] == null) && $statusCode == 200){

        //Get today weather
        $city =  $obj['query']['results']['channel']['location']['city'];
        $windSpeed =  $obj['query']['results']['channel']['wind']['speed'];
        $currentDirection =  $obj['query']['results']['channel']['wind']['direction'];
        
        //Get forecast
        $forecastText =  $obj['query']['results']['channel']['item']['forecast'][1]['text'];
        $forecastHight =  $obj['query']['results']['channel']['item']['forecast'][1]['high'];
        $forecastLow =  $obj['query']['results']['channel']['item']['forecast'][1]['low'];
        
        //Print weather information
        echo PHP_EOL. 'Weather info for '. $city . PHP_EOL . 'Current wind speed: ' . $windSpeed . PHP_EOL. 'Current direction: '. $currentDirection. PHP_EOL . 'Forecast for tomorrow: '. $forecastText. ', between ' . $forecastHight . ' and ' . $forecastLow. ' degrees'. PHP_EOL;
        
        echo PHP_EOL;
    }else{
        echo 'Problem. Try again!'.PHP_EOL;
    }


}


?>