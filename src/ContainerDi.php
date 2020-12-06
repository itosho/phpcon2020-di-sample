<?php
declare(strict_types=1);

namespace Di\Container;

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

// DI Container
require 'vendor/autoload.php';

use League\Container\Container;

$container = new Container;

$container->add(MessageServiceInterface::class, MailService::class);
$container->add(MessageClient::class)->addArgument(MessageServiceInterface::class);

$client = $container->get(MessageClient::class);
$client->sendMessage();
