<?php
// DIを使ったコード（具体クラスに依存させる）
declare(strict_types=1);

namespace Di\Concretion;

require 'Service.php';

use Di\Service\AwsSesService;

class MailClient
{
    private AwsSesService $service;

    // 外部から注入しても具体のクラスに依存していることには変わりがない
    public function __construct(AwsSesService $service)
    {
        $this->service = $service;
    }

    public function sendMessage()
    {
        $this->service->send();
    }
}

$client = new MailClient(new AwsSesService());
$client->sendMessage();
