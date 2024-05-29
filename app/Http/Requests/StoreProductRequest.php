<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category_id' => 'required',
            'name' => 'max:255|required',
            'image' => 'nullable',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'status' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Loại sản phẩm',
            'name' => 'Tên sản phẩm',
            'image' => 'Ảnh sản phẩm',
            'price' => 'Giá sản phẩm',
            'discount' => 'Mã giảm giá',
            'status' => 'Trạng thái',
        ];
    }
}
