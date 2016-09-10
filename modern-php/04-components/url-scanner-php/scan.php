<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/22/16
 * Time: 3:29 PM
 */

// Use Composer autoloader
require 'vendor/autoload.php';

// Instantiate Guzzle HTTP client
$client = new \Guzzle\Http\Client();

// Open and iterate CSV
$csv = \League\Csv\Reader::createFromPath($argv[1]);


foreach ($csv as $csvRow) {

    try {
        // Send HTTP OPTIONS request
        $httpRequest = $client->get($csvRow[0]);
        $httpResponse = $client->send($httpRequest);

        // Inspect HTTP response status code
        if ($httpResponse->getStatusCode() >= 400) {
            throw new \Exception();
        }
    } catch (\Exception $e) {
        // Send bad URLs to standard out
        echo $csvRow[0].PHP_EOL;
    }
}
