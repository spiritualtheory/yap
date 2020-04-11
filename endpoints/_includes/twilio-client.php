<?php
require_once __DIR__ . '/../../vendor/autoload.php';
#use Twilio\Rest\Client;
use SignalWire\Rest\Client;

try {
    #$twilioClient = new Client(setting("twilio_account_sid"), setting("twilio_auth_token"));
    $twilioClient = new Client(setting("twilio_account_sid"), setting("twilio_auth_token"), array("signalwireSpaceUrl" => "yap.signalwire.com"));
    $GLOBALS['twilioClient'] = $twilioClient;
} catch (\Twilio\Exceptions\ConfigurationException $e) {
    error_log("Missing Twilio Credentials");
}

function hup($callSid)
{
    $GLOBALS['twilioClient']->calls($callSid)->update(array('status' => 'completed'));
}
