<?php

use function DI\create;
use function DI\get;

return [
    'host' => 'xland.ru',
    'Boangri\LearnPhpDi\MailerInterface' => create('Boangri\LearnPhpDi\Mailer')->constructor(get('host')),
];