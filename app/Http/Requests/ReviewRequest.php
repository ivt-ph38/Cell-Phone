<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        'value'=>'required',
        'name'=>'required|string',
        'email'=>'required|email|unique:guests,email',
        'content'=>'required|string'
        ];
    }
     public function messages () {
        return [
            'value.required'=> 'Bạn chưa đánh giá sao',
            'name.required'=> 'Bắt buộc nhập tên của bạn',
            'email.required'=> 'Bắt buộc nhập email',
            'email.email'=> 'email không hợp lệ',
            'email.unique'=> 'email đã tồn tại',
            'content.required' => 'Yêu cầu nhập đánh giá của ban'
            
           
          
        ];
    }
}
