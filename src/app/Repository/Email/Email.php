<?php

declare(strict_types=1);

namespace App\Repository\Email;

class Email implements EmailInterface
{
    /**
     * @var \App\Email
     */
    private $email;

    /**
     * Email constructor.
     * @param \App\Email $email
     */
    public function __construct(\App\Email $email)
    {
        $this->email = $email;
    }

    public function save(string $email)
    {
        $this->email->email = $email;
        $this->email->save();
    }
}
