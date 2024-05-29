<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            'username' => 'required|max:50|unique:users',
            'email' => 'max:50|required',
            'password' => 'required|confirmed|min:8',
            'display_name' => 'required|max:50',
            'avatar' => 'nullable|image|max:2000',
            'phone' => 'required|numeric',
            'role' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'Tên đăng nhập',
            'email' => 'Địa chỉ Email',
            'password' => 'Mật khẩu',
            'display_name' => 'Tên hiển thị',
            'avatar' => 'Avatar',
            'phone' => 'Số điện thoại',
            'role' => 'Quyền',
        ];
    }
}
