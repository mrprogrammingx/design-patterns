<?php

namespace App\Http\Controllers\Observer;

use App\Models\ActivityLog;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function observe()
    {
        return User::create([
            'name' => 'Samira',
            'email' => 'samira@sample.com',
            'password' => Hash::make('password')
        ]);
    }

    public function update()
    {
        $user = User::where([
            'email' => 'samira@sample.com',
        ])->first();

        $user->name = 'Anastasia 1';
         
        $user->update();

        return view('observers.user',[
            'user' => $user->toArray()
        ]);
    }

    public function delete()
    {   
        $user = User::where([
            'email' => 'samira@sample.com',
        ])->first();

        $user?->delete();

        return response()->json($user);
    }

    public function allActivityLog()
    {
        return ActivityLog::all();
    }
}
