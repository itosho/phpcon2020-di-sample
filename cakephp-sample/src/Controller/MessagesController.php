<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\MailServiceInterface;

class MessagesController extends AppController
{
    public function index(MailServiceInterface $mail)
    {
        $mail->send();
        exit;
    }
}
