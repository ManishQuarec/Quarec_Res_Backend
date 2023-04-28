<?php

namespace App\Interfaces;

interface PermissionRepositoryInterface
{
    public function getAllPermissions();

    public function getPermissionById(int $permissionId);

    public function createPermission(array $permissionDetails);

    public function updatePermission(int $permissionId, array $updatedDetails);

    public function deletePermission(int $permissionId);
}
