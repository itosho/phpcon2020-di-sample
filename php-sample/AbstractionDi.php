<?php
// DIを使ったコード（抽象クラスに依存させる）
declare(strict_types=1);

namespace Di\Abstraction;

use Di\Service\AwsSesService;
use Di\Service\MailServiceInterface;

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

// 抽象に依存させることで柔軟にクラスを差し替えることが出来る
$client = new MailClient(new AwsSesService());
$client->sendMessage();
