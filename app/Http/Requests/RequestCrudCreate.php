<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCrudCreate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:255|min:5',
            'discrabtion'=>'required|string|max:255|min:10',
            'price'=>'required|numeric|max:99999.99|min:1',
            'quaintity'=>'required|integer|nullable|max:999|min:0',
            'statues'=>'required|integer|between:1,2',
        ];
    }
}
