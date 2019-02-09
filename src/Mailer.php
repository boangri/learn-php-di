<?php

namespace Boangri\LearnPhpDi;

class Mailer implements MailerInterface
{
    /** @var string Host */
    protected $host;

    /**
     * Mailer constructor.
     * @param string $host
     */
    public function  __construct(string $host = 'zion')
    {
        $this->host = $host;
        echo "Created Mailer class\n";
    }

    /**
     * @param string $recipient
     * @param string $content
     */
    public function sendmail(string $recipient, string $content)
    {
        echo "Sending email to {$recipient} via {$this->host}\n";
        echo "Content: {$content}\n";
    }
}
