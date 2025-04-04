<?php

namespace App\Services\LowCoupling;

use App\Repositories\Interfaces\NotifierRepositoryInterface;
use App\Services\Interfaces\NotificationServiceInterface;
use InvalidArgumentException;

class NotificationService implements NotificationServiceInterface
{
    private NotifierRepositoryInterface $notifierRepository;

    public function __construct(NotifierRepositoryInterface $notifierRepository)
    {
        $this->notifierRepository = $notifierRepository;
    }

    public function notifyUser(?string $message): void
    {
        if (is_null($message)) {
            throw new InvalidArgumentException('Message cannot be null');
        }

        if (trim($message) === '') {
            throw new InvalidArgumentException('Message cannot be empty');
        }

        // 通知を送信
        $this->notifierRepository->sendNotification($message);
    }
}
