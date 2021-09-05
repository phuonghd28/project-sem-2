<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
        if (request()->isMethod('PUT')) {
            $rules['image'] = 'image|mimes:jpg,png,jpeg,gif,svg|max:2048';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'image.required'=>'Vui lòng chọn ảnh.',
            'image.image'=>'Vui lòng chọn đúng file ảnh.',
            'image.jpg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.jpeg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.gif'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.svg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.max'=>'Vui lòng chọn ảnh kích thước nhỏ hơn.'
        ];
    }
}
