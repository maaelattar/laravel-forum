<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function notifications()
    {
        auth()->user()->unreadNotifications->markAsRead();
        return view('users.notifications', ['notifications' => auth()->user()->notifications()->paginate(5)]);
    }
}
