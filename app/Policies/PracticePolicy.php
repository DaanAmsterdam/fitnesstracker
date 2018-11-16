<?php

namespace App\Policies;

use App\User;
use App\Practice;
use Illuminate\Auth\Access\HandlesAuthorization;

class PracticePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the practice.
     *
     * @param  \App\User  $user
     * @param  \App\Practice  $practice
     * @return mixed
     */
    public function update(User $user, Practice $practice)
    {
        return $user->id == $practice->user_id;
    }
}
