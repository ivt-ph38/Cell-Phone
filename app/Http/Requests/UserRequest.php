<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        'fullname' => 'required|string',
        'phone'=> 'required|numeric',
        'address'=> 'required', 
        ];
    }
     public function messages () {
        return [
            'fullname.required'=> 'Không được để trống tên',
            'phone.required' => 'Yêu cầu nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'address.required' => 'Yêu cầu nhập địa chỉ',
          
        ];
    }
}
