<?php
// DIコンテナを利用したコード
declare(strict_types=1);

namespace Di\Container;

require 'vendor/autoload.php';
require 'Service.php';

use Di\Service\SendGridService;
use Di\Service\MailServiceInterface;
use League\Container\Container;

class MailClient
{
    private MailServiceInterface $service;

    public function __construct(MailServiceInterface $service)
    {
        $this->service = $service;
    }

    public function sendMessage()
    {
        $this->service->send();
    }
}

$container = new Container;

$container->add(MailServiceInterface::class, SendGridService::class);
$container->add(MailClient::class)->addArgument(MailServiceInterface::class);

/** @var MailClient $client */
$client = $container->get(MailClient::class);
$client->sendMessage();
