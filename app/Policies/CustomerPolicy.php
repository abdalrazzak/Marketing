<?php

namespace App\Policies;

use App\User;
use App\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function view(User $user, Customer $customer)
    {
        return $this->checkPermission($user,'view-customer');
    }

    /**
     * Determine whether the user can create customers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->checkPermission($user,'create-customer');
    }

    /**
     * Determine whether the user can update the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function update(User $user, Customer $customer)
    {
        return $this->checkPermission($user,'update-customer');
    }

    /**
     * Determine whether the user can delete the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function delete(User $user, Customer $customer)
    {
        return $this->checkPermission($user,'delete-customer');
    }
    private function checkPermission($user,$perm)
    {
        foreach ($user->roles   as $role)
        {
            foreach ($role->permissions as $permission)
            {
                if ($permission->slug == $perm)
                    return true;
            }
        }
        return false;
    }
}
