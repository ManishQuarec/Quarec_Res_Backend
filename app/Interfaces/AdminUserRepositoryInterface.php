<?php

namespace App\Interfaces;

interface AdminUserRepositoryInterface
{
    public function getAllAdminUsers();

    public function getAdminUserById(int $adminUserId);

    public function getUserByPhone(string $phone);

    public function verifyUseremail(string $email);

    public function verifyUserPhoneOTP(string $phone, int $otp);

    public function createAdminUser(array $adminUserDetails);

    public function updateAdminUser(int $adminUserId, array $updatedDetails);

    public function deleteAdminUser(int $adminUserId);

    public function updateStatus(int $userId, $statusData);

    public function getAllStaff();
}
