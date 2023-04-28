<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAdminUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('admin-user-update'), Response::HTTP_UNAUTHORIZED, '401 UNAUTHORIZED');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $adminUserCommonValidation = 'required|string';

        return [
            'first_name' => $adminUserCommonValidation,
            'last_name' => $adminUserCommonValidation,
            'email' => 'required|email|string',
            'role' => 'required|integer|exists:roles,id',
            'country' => 'required|integer|exists:countries,id',
        ];
    }
}
