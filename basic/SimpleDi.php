<?php
declare(strict_types=1);

namespace Di\Simple;

class MessageClient
{
    private MailService $service;

    // 外部から注入しても依存していることには変わらない
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
