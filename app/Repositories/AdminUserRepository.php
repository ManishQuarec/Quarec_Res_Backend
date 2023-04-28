<?php

namespace App\Repositories;

use App\Interfaces\AdminUserRepositoryInterface;
use App\Models\User;
use App\Models\UserSettings;
use Illuminate\Support\Str;

class AdminUserRepository implements AdminUserRepositoryInterface
{
    /**
     * Get all Admin Users list.
     */
    public function getAllAdminUsers()
    {
        return User::with(['countryInfo', 'roleInfo'])->whereIn('role', ADMIN_LOGIN_USERS)->get();
    }

    public function getAdminUserById(int $adminUserId)
    {
        return User::where('id', $adminUserId)->whereIn('role', ADMIN_LOGIN_USERS)->first();
    }

    public function getAllStaff()
    {
        return User::whereIn('role', [1, 2])->where('status', 1)->get()->except(auth('api')->user()->id);
    }

    public function getUserByPhone(string $phone)
    {
        return User::where('phone', $phone)->first();
    }

    public function verifyUserPhoneOTP(string $phone, int $otp)
    {
        return User::where('phone', $phone)->where('otp', $otp)->first();
    }

    public function verifyUseremail(string $email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * @param array $adminUserDetails contains required data to create a Admin User
     *
     * @return array Created Admin User details
     */
    public function createAdminUser(array $adminUserDetails)
    {
        $adminUserDetails['status'] = 0;
        $adminUser = User::create($adminUserDetails);
      //  $adminUser->roles()->sync($adminUserDetails['role']); //attaching role to user

        return $adminUser;
    }

    /**
     * @param array $adminUserDetails contains required data to create a Admin User
     *
     * @return array Created Admin User details
     */
    public function createAppUser(array $adminUserDetails)
    {
        $adminUserDetails['status'] = 1;
        $adminUser = User::create($adminUserDetails);
        $adminUser->roles()->sync($adminUserDetails['role']); //attaching role to user

        UserSettings::create([
            'user_id' => $adminUser->id,
            'referral_code' => Str::random(8) . '_' . $adminUser->id,
            'language_code' => $adminUserDetails['language_code'],
        ]);

        // create fresh chat user
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.eu.freshchat.com/v2/users',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "email": ' . "$adminUser->email" . ',
            "first_name": ' . str_replace(' ', '_', $adminUser->first_name) . ',
            "last_name": ' . str_replace(' ', '_', $adminUser->last_name) . ',
            "phone": ' . "$adminUser->phone" . ',
            "reference_id": ' . "$adminUser->id" . '
        }',
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            env('Freshchat_Api_Key'),
        ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $freshChatResponse = json_decode($response);
        $adminUser->actor_id = $freshChatResponse->id;
        $adminUser->update();

        return $adminUser;
    }

    /**
     * @param int $adminUserId
     * @param array $updatedDetails
     *
     * @return array Updated Admin User details
     */
    public function updateAdminUser(int $adminUserId, array $updatedDetails)
    {
        $adminUser = User::findOrFail($adminUserId);
        $adminUser->update($updatedDetails);
        $adminUser->roles()->sync(2); //attaching role to user

        return $adminUser;
    }

    /**
     * @param int $adminUserId Admin User id which is to be deleted
     *
     * @return array Deleted Admin User
     */
    public function deleteAdminUser(int $adminUserId)
    {
        return User::destroy($adminUserId);
    }

    public function updateStatus(int $userId, $statusData)
    {
        return User::whereId($userId)->update($statusData);
    }
}
