<?php
declare(strict_types=1);

class MessageClient
{
    private MailService $service; // Serviceが変わるたびに修正が必要

    public function __construct()
    {
        $this->service = new MailService(); // Serviceが変わるたびに修正が必要
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
