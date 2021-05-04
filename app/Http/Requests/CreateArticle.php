<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticle extends FormRequest
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
            'title' =>'required|string|max:50',
            'textart'=>'required|string|max:1000'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'title.string' => 'اسم العنوان لابد ان يكون احرف',
            'title.max' => 'هذا العنوان لابد الا يزيد عن 50 احرف ',
            't_area.string' => 'هذا الحقل لابد ان يكون احرف ',
            't_area.max' => 'اسم الحقل لابد الا يزيد عن 1000 احرف ',
        ];
    }

}
