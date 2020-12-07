<?php
declare(strict_types=1);

namespace Di\Service;

interface MailServiceInterface
{
    public function send();
}

class AwsSesService implements MailServiceInterface
{
    public function send()
    {
        echo 'send message by AWS SES.';
    }
}

class SendGridService implements MailServiceInterface
{
    public function send()
    {
        echo 'send message by SendGrid.';
    }
}
