<?php

namespace App\Repositories;

use App\Interfaces\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    /**
     * Get all roles list.
     */
    public function getAllRoles()
    {
        return Role::all();
    }

    public function getRoleById(int $roleId)
    {
        return Role::findOrFail($roleId);
    }

    /**
     * @param array $roleDetails contains required data to create a role
     *
     * @return array Created Role details
     */
    public function createRole(array $roleDetails, array $permissions)
    {
        $role = Role::create($roleDetails);
        $role->permissions()->sync($permissions);

        return $role;
    }

    /**
     * @param int $roleId
     * @param array $updatedDetails
     *
     * @return array Updated Role details
     */
    public function updateRole(int $roleId, array $updatedDetails, array $permissions)
    {
        $role = Role::findOrFail($roleId);
        $role->update($updatedDetails);
        $role->permissions()->sync($permissions);

        return $role;
    }

    /**
     * @param int $roleId Role id which is to be deleted
     *
     * @return array Deleted Role
     */
    public function deleteRole(int $roleId)
    {
        return Role::destroy($roleId);
    }
}
