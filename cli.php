<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\MultiChannelNotificationsController;

echo "========================================\n";
echo " Laravel Omnichannel Notification Engine CLI Engine\n";
echo "========================================\n\n";

$controller = new MultiChannelNotificationsController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";
