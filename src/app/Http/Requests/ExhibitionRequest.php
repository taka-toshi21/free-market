<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'categories[]' => ['required'],
            'status' => ['required'],
            'name' => ['required'],
            'description' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function messages(){
        return[
            'categories[].required' => 'カテゴリーを一つ以上選択してください',
            'status.required' => '商品の状態を選択してください',
            'name.required' => '商品名を登録してください',
            'description.required' => '商品の説明を入力してください',
            'description.max' => '商品の説明は255文字以内で入力してください',
            'price.required' => '販売価格を入力してください',
            'price.numeric' => '販売価格を数値で入力してください',
            'price.min' => '販売価格を0円にはしないでください',
        ];
    }
}
