<?php

namespace App\Interfaces;

interface RoleRepositoryInterface
{
    public function getAllRoles();

    public function getRoleById(int $roleId);

    public function createRole(array $roleDetails, array $permissions);

    public function updateRole(int $roleId, array $updatedDetails, array $permissions);

    public function deleteRole(int $roleId);
}
