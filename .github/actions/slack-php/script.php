<?php
require_once 'vendor/rmccue/requests/src/Autoload.php';
WpOrg\Requests\Autoload::register();


echo "::debug::Sending a request to slack\n";

$response =  WpOrg\Requests\Requests::post(
  $_ENV['INPUT_SLACK_WEBHOOK'],
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
                    "text" => $_ENV["INPUT_MESSAGE"],
                ),
            ),
            array (
                "type" => "section",
                "fields" => array (
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Event:*\n{$_ENV['GITHUB_EVENT_NAME']}",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*Ref:*\n{$_ENV['GITHUB_REF']}",
                    ),
                    array (
                        "type" => "mrkdwn",
                        "text" => "*SHA:*\n{$_ENV['GITHUB_SHA']}",
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