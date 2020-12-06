<?php
// DIコンテナを利用したコード
declare(strict_types=1);

namespace Di\Container;

require 'vendor/autoload.php';

use Di\Service\SendGridService;
use Di\ServiceLocator\MessageServiceInterface;
use League\Container\Container;

class MailClient
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

$container = new Container;

$container->add(MessageServiceInterface::class, SendGridService::class);
$container->add(MailClient::class)->addArgument(MessageServiceInterface::class);

/** @var MailClient $client */
$client = $container->get(MailClient::class);
$client->sendMessage();
