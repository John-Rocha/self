<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JogoRequest extends FormRequest
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
            'player1' => 'required|numeric',
            'player2' => 'required|numeric',
            'player3' => 'required|numeric',
            'player4' => 'required|numeric',
        ];
    }
}
