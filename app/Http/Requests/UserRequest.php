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
            'username' => 'required|min:3|max:20',
            'fullname' => 'required|min:3|max:50',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|min:4|max:20|confirmed'
            
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập :attribute ',
            'username.min' => ':attribute ít nhất 3 kí tự.',
            'username.max' => ':attribute nhiều nhất 20 kí tự.',
            'fullname.required' => 'Vui lòng nhập :attribute ',
            'fullname.min' => ':attribute ít nhất 3 kí tự.',
            'fullname.max' => ':attribute nhiều nhất 50 kí tự.',
            'email.required' => ':attribute bắt buộc phải nhập.',
            'email.email' => ':attribute không hợp lệ',
            'address.required' => ':attribute bắt buộc phải nhập.',
            'phone.required' => ':attribute không hợp lệ.',
            'password.required' => ':attribute bắt buộc phải nhập.',
            'password.min' => ':attribute ít nhất 4 kí tự'
    
        ];
    }
    public function attributes()
    {
        return [
            'username' =>' UserName',
            'fullname' =>' FullName',
            'email' =>' Email',
            'phone' =>' Phone',
            'address' =>' Address',
            'password' =>' Password'
            

        ];
    }
}
