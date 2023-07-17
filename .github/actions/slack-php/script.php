<?php
require_once 'vendor/rmccue/requests/src/Autoload.php';
WpOrg\Requests\Autoload::register();

var_dump($argv);
var_dump($_ENV);

echo "::debug::Sending a request to slack\n";

$response =  WpOrg\Requests\Requests::post(
  '',
  array(
    'Content-Type' => 'application/json'
  ),
  json_encode(array (
    'blocks' => 
        array (
            array (
                "type" => "section",
                "text" => array (
                    "type" => "mrkdwn",
                    "text" => 'Message',
                ),
            ),
            array (
                "type" => "section",
                "fields" => array (
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Repository:*\nRepository",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Event:*\nEvent",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Ref:*\nRef",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*SHA:*\nSHA",
                    ),
                ),
            ),
        ),
))
);

echo "::group::Slack Response\n";
var_dump($response);
echo "::endgroup::\n";

if(!$response->success) {
  echo $response->body;
  exit(1);
}