<?php
declare(strict_types=1);

namespace Di\Not;

class MessageClient
{
    private MailService $service;

    public function __construct()
    {
        // Serviceが変わるたびに修正が必要
        $this->service = new MailService();
    }

    public function sendMessage()
    {
        $this->service->send();
    }
}

class MailService
{
    public function send()
    {
        print_r('send message by email.');
    }
}

class PushService
{
    public function send()
    {
        print_r('send message by push.');
    }
}

$client = new MessageClient();
$client->sendMessage();
