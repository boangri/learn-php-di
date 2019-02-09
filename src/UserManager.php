<?php

namespace Boangri\LearnPhpDi;

class UserManager
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        // The user just registered, we create his account
        // ...

        // We send him an email to say hello!
        $this->mailer->sendmail($email, 'Hello and welcome - 2!');
    }
}
