<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Diaryrequest extends FormRequest
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
            'diary.title' => 'required|string|max:100',
            'diary.body' => 'required|string|max:4000',
        ];
    }
    
    
}
