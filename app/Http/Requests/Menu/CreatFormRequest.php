<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreatFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' =>'required',
            'content' =>'required',
        ];
    }

    public function messages(){
        
        return [
            'name.required' => 'Vui lòng nhập tên Danh Mục',
            'description.required' => 'Vui lòng nhập Mô Tả',
            'content.required' => 'Vui lòng nhập tên Mô Tả Chi Tiết',
            
        ];
    }
}
