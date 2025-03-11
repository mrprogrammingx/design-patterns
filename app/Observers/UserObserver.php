<?php

namespace App\Observers;

use App\Models\ActivityLog;
use App\Models\User;
use App\Contracts\Observer\UserObserverInterface;

class UserObserver implements UserObserverInterface
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        ActivityLog::create([
            'description' => 'User created: ' . $user->name,
            'user_id' => $user->id,
        ]);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        ActivityLog::create([
            'description' => 'User updated: ' . $user->name,
            'user_id' => $user->id,
        ]);
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        ActivityLog::create([
            'description' => 'User deleted: ' . $user->name,
            'user_id' => $user->id,
        ]);
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        ActivityLog::create([
            'description' => 'User restored: ' . $user->name,
            'user_id' => $user->id,
        ]);
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        ActivityLog::create([
            'description' => 'User forceDeleted: ' . $user->name,
            'user_id' => $user->id,
        ]);
    }
}
