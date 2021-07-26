<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class apartment_validate extends FormRequest
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
            'name'=>['required','min:10','max:50'],
            'address'=>['required'],
            'price'=>['required','numeric'],
            'Thumnail'=>['required'],
            'status'=>['required','min:1','max:3'],
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Trường này không được để trống',
            'name.min'=>'Tên chung cư phải có tối thiểu 10 ký tự',
            'name.max'=>'Tên chung cư phải có tối đa 10 ký tự',
            'address.required'=>'Trường này không được để trống',
            'price.required'=>'Trường này không được để trống',
            'price.numeric'=>'Gía phải là kiểu số',
            'status.required'=>'Trường này không được để trống',
            'status.min'=>'Trạng thái phải là từ số 1 đến 3',
            'status.max'=>'Trạng thái phải là từ số 1 đến 3',
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('Thumnail')!=='url'){
                $validator->errors()->add('Thumnail', 'ảnh đại diện phải là link ảnh');
            }
        });

    }
}
