<?php

/**
 * API Routes Definition for laravel-multi-channel-notifications
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/multi-channel-notifications' => ['App\Controllers\\MultiChannelNotificationsController', 'index'],
    'POST /api/v1/multi-channel-notifications' => ['App\Controllers\\MultiChannelNotificationsController', 'store'],
    'GET /api/v1/multi-channel-notifications/{id}' => ['App\Controllers\\MultiChannelNotificationsController', 'show'],
    'DELETE /api/v1/multi-channel-notifications/{id}' => ['App\Controllers\\MultiChannelNotificationsController', 'destroy']
];