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
        'password'=>'required|min:6',
        ];
    }
     public function messages () {
        return [
            'fullname.required'=> 'Không được để trống tên',
            'phone.required' => 'Yêu cầu nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'password.required' => 'Yêu cầu nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'address.required' => 'Yêu cầu nhập địa chỉ',
          
        ];
    }
}
