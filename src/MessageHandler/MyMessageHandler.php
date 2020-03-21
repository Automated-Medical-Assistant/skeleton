<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\DataTransferObject\TestDataProvider;
use App\Redis\RedisServiceInterface;

class MyMessageHandler
{
    private RedisServiceInterface $redisService;

    /**
     * @param \App\Redis\RedisServiceInterface $redisService
     */
    public function __construct(\App\Redis\RedisServiceInterface $redisService)
    {
        $this->redisService = $redisService;
    }
    public function __invoke(TestDataProvider $message)
    {
        try {
            $this->redisService->set((string)$message->getTestInt(), $message->getTestString());
        } catch (\Throwable $e) {
            dump($e);
        }
    }
}
