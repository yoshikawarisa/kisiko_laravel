<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'title' => 'required|max:30',
            'message' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title.required' => ':attribute の入力をお願いします',
            'title.max' => ':attribute の入力は30文字以内でお願いします',
            'message.required' => ':attribute の入力をお願いします',
        ];
    }
}   