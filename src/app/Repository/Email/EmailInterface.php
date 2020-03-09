<?php

declare(strict_types=1);

namespace App\Repository\Email;

use App\Email;

interface EmailInterface
{
    public function save(string $email);
}
