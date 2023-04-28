<?php

namespace App\Repositories;

use App\Interfaces\PermissionRepositoryInterface;
use App\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
    /**
     * Get all permissions list.
     */
    public function getAllPermissions()
    {
        return Permission::all();
    }

    /**
     * @param int $permissionId
     *
     * @return array Single Permission details
     */
    public function getPermissionById(int $permissionId)
    {
        return Permission::findOrFail($permissionId);
    }

    /**
     * @param array $permissionDetails contains required data to create a permission
     *
     * @return array Created Permission details
     */
    public function createPermission(array $permissionDetails)
    {
        return Permission::create($permissionDetails);
    }

    /**
     * @param int $permissionId
     * @param array $updatedDetails
     *
     * @return array Updated Permission details
     */
    public function updatePermission(int $permissionId, array $updatedDetails)
    {
        return Permission::whereId($permissionId)->update($updatedDetails);
    }

    /**
     * @param int $permissionId Permission id which is to be deleted
     *
     * @return array Deleted Permission
     */
    public function deletePermission(int $permissionId)
    {
        return Permission::destroy($permissionId);
    }
}
