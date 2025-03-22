<?php

namespace App\Http\Controllers\HighCoupling;

use App\Http\Controllers\Controller;
use App\Services\HighCoupling\NotificationService;
use Illuminate\Http\Request;

class HighCouplingNotificationController extends Controller
{
    private NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function index()
    {
        return view('highCoupling.send');
    }

    public function send(Request $request)
    {
        $message = $request->input('message');
        return $this->notificationService->sendNotification($message);
    }
}
