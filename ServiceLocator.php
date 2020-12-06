<?php
declare(strict_types=1);

namespace Di\ServiceLocator;

require 'vendor/autoload.php';
use League\Container\Container;

class MessageClient
{
    private Container $service;

    public function __construct(Container $service)
    {
        $this->service = $service;
    }

    public function sendMessage()
    {
        $this->service->get(MessageServiceInterface::class )->send();
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

$container = new Container;

$container->add(MessageServiceInterface::class, MailService::class);

$client = new MessageClient($container);
$client->sendMessage();
