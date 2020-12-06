<?php
// サービスロケーターパターンのコード（WIP）
declare(strict_types=1);

namespace Di\ServiceLocator;

require 'vendor/autoload.php';

use Di\Service\MailServiceInterface;
use Di\Service\SendGridService;
use League\Container\Container;

class MailClient
{
    private Container $service;

    public function __construct(Container $service)
    {
        $this->service = $service;
    }

    public function sendMessage()
    {
        $this->service->get(MailServiceInterface::class)->send();
    }
}

$container = new Container;

$container->add(MailServiceInterface::class, SendGridService::class);

$client = new MailClient($container);
$client->sendMessage();
