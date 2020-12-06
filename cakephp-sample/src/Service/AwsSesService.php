<?php
declare(strict_types=1);

namespace App\Service;

class AwsSesService implements MailServiceInterface
{
    public function send()
    {
        print_r('send message by aws ses.');
    }
}
