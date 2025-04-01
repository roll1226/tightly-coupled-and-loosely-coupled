<?php

namespace App\Http\Controllers\HighCoupling;

use App\Http\Controllers\Controller;
use App\Services\HighCoupling\NotificationService;
use Illuminate\Http\Request;

class HighCouplingNotificationController extends Controller
{
    public function __construct()
    {
        $this->notificationService = new NotificationService();
    }

    public function index()
    {
        return view('highCoupling.send');
    }

    public function send(Request $request)
    {
        $message = $request->input('message');
        return $this->notificationService->sendEmail($message);
    }
}
