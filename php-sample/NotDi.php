<?php
// DIではないコード
declare(strict_types=1);

namespace Di\Not;

require 'Service.php';

use Di\Service\AwsSesService;

class MailClient
{
    private AwsSesService $service;

    public function __construct()
    {
        $this->service = new AwsSesService(); // Serviceが変わるたびに修正が必要
    }

    public function sendMessage()
    {
        $this->service->send();
    }
}

$client = new MailClient();
$client->sendMessage();
