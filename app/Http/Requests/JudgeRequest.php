<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JudgeRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required'
        ];
    }

    public function all()
    {
        return $data = parent::all();
    }
}
