<?php

namespace App\Services\LowCoupling;

use App\Services\Interfaces\NotificationServiceInterface;
use App\Repositories\Interfaces\NotifierRepositoryInterface;

class NotificationService implements NotificationServiceInterface
{
    private NotifierRepositoryInterface $notifierRepository;

    public function __construct(NotifierRepositoryInterface $notifierRepository)
    {
        $this->notifierRepository = $notifierRepository;
    }

    public function notifyUser(string $message): void
    {
        $this->notifierRepository->sendNotification($message);
    }
}
