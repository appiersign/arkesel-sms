<?php

namespace Appiersign\ArkeselSms;

use GuzzleHttp\Client;

class ArkeselSms
{
    const URL = '';
    private string $message;
    private array $recipients;
    private string $apiKey;
    private string $senderId;

    public function __construct(array $recipients, string $message)
    {
        $this->recipients = $recipients;
        $this->message = $message;
        $this->senderId = getenv('ARKESEL_SMS_SENDER_ID');
        $this->apiKey = getenv('ARKESEL_SMS_API_KEY');
    }

    public function send()
    {
        return $this->apiKey;
        $request = new Client();
        $response = $request->post(self::URL, [
            'body' => [

            ]
        ]);


    }
}