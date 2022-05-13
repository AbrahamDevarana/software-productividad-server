<?php

namespace App\Policies;

use App\Models\Perspectiva;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PerspectivaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        // return $user->hasPermissionTo('Ver perspectivas');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Perspectiva  $perspectiva
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Perspectiva $perspectiva)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // return $user->hasPermissionTo('crear perspectivas');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Perspectiva  $perspectiva
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Perspectiva $perspectiva)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Perspectiva  $perspectiva
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Perspectiva $perspectiva)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Perspectiva  $perspectiva
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Perspectiva $perspectiva)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Perspectiva  $perspectiva
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Perspectiva $perspectiva)
    {
        //
    }
}
