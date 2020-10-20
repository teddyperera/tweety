<?php

namespace App;

use App\Models\User;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function toggleFollowing(User $user)
    {
        $this->follows()->toggle($user);
    }

    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)
            ->exists();
    }
}
