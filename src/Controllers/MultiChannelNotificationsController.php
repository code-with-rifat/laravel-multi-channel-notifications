<?php

namespace App\Controllers;

use App\Services\\MultiChannelNotificationsService;

class MultiChannelNotificationsController
{
    private MultiChannelNotificationsService $service;

    public function __construct()
    {
        $this->service = new MultiChannelNotificationsService();
    }

    public function handleRequest(array $request): array
    {
        if (empty($request)) {
            return [
                'code' => 400,
                'status' => 'error',
                'message' => 'Invalid or empty request payload'
            ];
        }

        $result = $this->service->process($request);

        return [
            'code' => 200,
            'status' => 'success',
            'response' => $result
        ];
    }

    public function status(): array
    {
        return [
            'service' => 'Laravel Omnichannel Notification Engine',
            'version' => '1.0.0',
            'status' => 'operational'
        ];
    }
}
