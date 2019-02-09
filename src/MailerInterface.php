<?php

namespace Boangri\LearnPhpDi;

interface MailerInterface
{
    public function sendmail(
        string $email,
        string $content
    );
}