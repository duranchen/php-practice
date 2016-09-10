<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 11:19 AM
 */

$requestBody = '{"username":"josh"}';

$context = stream_context_create(
    [
        'http' =>
            [
                'method' => 'POST',
                'header' => "Content-Type: application/json;charset=utf-8;\r\n"."Content-Length: ".mb_strlen(
                        $requestBody
                    ),
                'content' => $requestBody,

            ],
    ]
);

$response = file_get_contents('https://my-api.com/users',false,$context);