<?php
declare(strict_types=1);

namespace App\Service;

class SendGridService implements MailServiceInterface
{
    public function send()
    {
        echo 'send message by SendGrid.';
    }
}
