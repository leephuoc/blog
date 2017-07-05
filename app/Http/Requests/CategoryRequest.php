<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoryRequest
 * 
 * @package App\Http\Requests
 */
class CategoryRequest extends FormRequest
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
        $id = isset($this->category) ? $this->category->id : null;

        $rules = [
            'name_category' => 'required'
        ];

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name_category.required' => 'Name category is required !'
        ];
    }
}
