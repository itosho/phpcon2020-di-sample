<?php
declare(strict_types=1);

namespace Di\Advanced;

class MessageClient
{
    private MessageServiceInterface $service;

    public function __construct(MessageServiceInterface $service)
    {
        $this->service = $service;
    }

    public function sendMessage()
    {
        $this->service->send();
    }
}

interface MessageServiceInterface
{
    public function send();
}

class MailService implements MessageServiceInterface
{
    public function send()
    {
        print_r('send message by email.');
    }
}

class PushService implements MessageServiceInterface
{
    public function send()
    {
        print_r('send message by push.');
    }
}

// 抽象に依存させることでここを変更するだけになる
$client = new MessageClient(new PushService());
$client->sendMessage();
