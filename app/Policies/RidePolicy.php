<?php

namespace App\Policies;

use App\User;
use App\Ride;
use Illuminate\Auth\Access\HandlesAuthorization;

class RidePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the ride.
     *
     * @param  \App\User  $user
     * @param  \App\Ride  $ride
     * @return mixed
     */
    public function update(User $user, Ride $ride)
    {
        return $user->id == $ride->user_id;
    }
}
