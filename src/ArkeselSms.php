<?php

namespace Appiersign\ArkeselSms;

use GuzzleHttp\Client;

class ArkeselSms
{
    const URL = 'https://sms.arkesel.com/api/v2/sms/send';
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function send(string $sender, array $recipients, string $message)
    {
        $request = new Client();
        $response = $request->post(self::URL, [
            'headers' => [
                'api-key' => $this->apiKey
            ],
            'form_params' => [
                'sender' => $sender,
                'recipients' => $recipients,
                'message' => $message
            ]
        ]);

        return (object)json_decode($response->getBody(), true);

    }
}