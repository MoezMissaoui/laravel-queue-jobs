<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NotifyUsersController extends Controller
{
    


    function __invoke() {
        $users = User::all();

        foreach ($users as $user) {
            $user->update([
                'notified' => !$user->notified
            ]);
        }
        
        return redirect()->back();
    }
}
