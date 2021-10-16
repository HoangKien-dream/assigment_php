<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentRequest extends FormRequest
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
            'name' => 'required|min:10|max:50',
            'address' => 'required',
            'price' => 'numeric|required',
            'thumbnail' => 'url|required',
            'detail' => 'required',
            'description' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'name.min' => 'Vui lòng nhập tên ít nhất 10 kí tự.',
            'name.max' => 'Vui lòng nhập tên nhiều nhất 50 kí tự.',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'detail.required' => 'Vui lòng nhập thông tin chi tiết',
            'price.required' => 'Vui lòng nhập giá tiền',
            'price.numeric' => 'Gía tiền phải là số',
            'description.required' => 'Vui lòng nhập thông tin',
            'thumbnail.required' => 'Vui lòng nhập link ảnh',
            'thumbnail.url' => 'Phải là một url',
            'status.required' => 'Vui lòng nhập trạng thái',

        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
           $status = $this->get('status');
            if($status != 1 && $status != 2 && $status != 3){
                $validator->errors()->add('status', 'Status phải là 1 ,2 và 3');
            }
        });;
    }
}
