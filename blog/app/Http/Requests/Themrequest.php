<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Themrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //bật tắt
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
            'name'=>'required|min:3|max:255',
            'age'=>'required|integer',
            'positon'=>'required',
            'salary'=>'required|integer',
        ];
    }
    
    public function messages()
    {
        return [
            'required'=>':attribute Không được để trống',
            'min'=>':attribute không được nhỏ hơn:min',
            'max'=>':attribute không được lớn hơn:max',
            'integer'=>':attribute chỉ được nhập số', 
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Tên cầu thủ',
            'age'=>'Tuổi',
            'positon'=>'Quốc tịch',
            'salary'=>'Lương'
        ];
    }
}
