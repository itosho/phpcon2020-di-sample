<?php
declare(strict_types=1);

namespace Di\Simple;

class MessageClient
{
    private MailService $service;

    public function __construct(MailService $service)
    {
        $this->service = $service;
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

$client = new MessageClient(new MailService());
$client->sendMessage();
