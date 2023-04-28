<?php

namespace App\Http\Requests\api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class ResumeCreateRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data'    => $validator->errors(),
        ], Response::HTTP_BAD_REQUEST));
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|string',
            'phone' => 'required|string',
            'resume' => 'required|mimes:doc,xlx,xls,pdf|max:10000',
            'job_role' => 'required|string',
            'year_of_exp'=>'required|numeric',
            'current_ctc'=>'required|numeric',
            'exp_ctc'=>'required|numeric',
            'job_sector'=>'required|string',
            'portfolio_url'=>'required|string',
        ];
    }
}
