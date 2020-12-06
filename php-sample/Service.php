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
        echo 'send message by aws ses.';
    }
}

class SendGridService implements MailServiceInterface
{
    public function send()
    {
        print_r('send message by send grid.');
    }
}
