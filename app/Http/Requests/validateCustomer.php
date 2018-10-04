<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateCustomer extends FormRequest
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
    public function rules() {
        return [
            'name' => 'required|max:50',
            'phone' => 'required|max:11',
            'email' => 'required|email',
        ];
    }

    public function messages() {
       return [
        'name.required' => 'Họ và tên không được để trống',
         'name.max'=> 'Họ và tên chỉ được tối đa 50 ký tự',
           'phone.required'=> 'Số điện thoại không được để trống',
           'phone.max'=> 'Số điện thoại không quá 11 số',
           'email.required'=>'Email không được để trống',
           'email.email'=>'Email chưa đúng định dạng'
           ];
    }
}
