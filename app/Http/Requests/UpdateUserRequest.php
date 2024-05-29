<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UpdateUserRequest extends StoreUserRequest
{
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
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();

        if (!$this['password']) {
            unset($rules['password']);
        }
        $rules['username'] = [
            'required',
            'max:50',
            Rule::unique('users')->ignore($this->id),
        ];

        return $rules;
    }
}
