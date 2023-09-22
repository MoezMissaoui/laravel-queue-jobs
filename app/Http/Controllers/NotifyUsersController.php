<?php

namespace App\Http\Controllers;

use App\Jobs\SendNotificationJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class NotifyUsersController extends Controller
{
    


    function __invoke() 
    {
        dispatch(new SendNotificationJob())->onQueue('notifications');
        return redirect()->back();
    }
}
