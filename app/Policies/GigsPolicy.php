<?php

namespace App\Policies;

use App\Models\Gigs;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GigsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Gigs $gigs): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Gigs $gigs): bool
    {
        return $user->id === $gigs->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Gigs $gig): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Gigs $gigs): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Gigs $gigs): bool
    {
        //
    }
}
