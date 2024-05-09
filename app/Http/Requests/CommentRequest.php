<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'comment_text' => 'required|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'comment_text.required' => ':attribute の入力をお願いします',
            'comment_text.max' => ':attribute の入力は50文字以内でお願いします',
        ];
    }
}   
