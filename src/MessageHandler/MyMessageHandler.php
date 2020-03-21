<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\DataTransferObject\TestDataProvider;

class MyMessageHandler
{
    public function __invoke(TestDataProvider $message)
    {
        dd($message);
    }
}
