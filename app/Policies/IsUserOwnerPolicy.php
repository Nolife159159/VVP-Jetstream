<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IsUserOwnerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function CheckIfUserIsOwner(User $user)
    {
        if ($user->admin === 4) {
            return true;
        }
        return false;
    }

}
