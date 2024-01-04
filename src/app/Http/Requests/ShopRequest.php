<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'reserved_date' => ['required'],
            'reserved_time' => ['required'],
            'reserved_num' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'reserved_date' => '日付を入力してください',
            'reserved_time' => '時間を入力してください',
            'reserved_num' => '人数を入力してください',
        ];
    }
}
