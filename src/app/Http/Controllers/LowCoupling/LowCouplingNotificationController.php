<?php

namespace App\Http\Controllers\LowCoupling;

use App\Http\Controllers\Controller;
use App\Services\LowCoupling\NotificationService;
use Illuminate\Http\Request;

class LowCouplingNotificationController extends Controller
{
    private NotificationService $notification;

    public function __construct(NotificationService $notificationService)
    {
        $this->notification = $notificationService;
    }

    public function index()
    {
        return view('lowCoupling.send');
    }

    public function send(Request $request)
    {
        $message = $request->input('message');
        return $this->notification->notifyUser($message);
    }
}
