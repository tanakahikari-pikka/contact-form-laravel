<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'tel1' => 'required | max:5 | regex:/^[0-9]+$/',
            'tel2' => 'required | max:5 | regex:/^[0-9]+$/',
            'tel3' => 'required | max:5 | regex:/^[0-9]+$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'category_id' => 'required',
            'detail' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'first_name.max' => '姓は255文字以内で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.max' => '名は255文字以内で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'tel1.required' => '電話番号を入力してください(1つ目)',
            'tel1.regex' => '電話番号は半角数字で入力してください(1つ目)',
            'tel1.max' => '電話番号は5桁までの数字で入力してください(1つ目)',
            'tel2.required' => '電話番号を入力してください(2つ目)',
            'tel2.regex' => '電話番号は半角数字で入力してください(2つ目)',
            'tel2.max' => '電話番号は5桁までの数字で入力してください(2つ目)',
            'tel3.required' => '電話番号を入力してください(3つ目)',
            'tel3.regex' => '電話番号は半角数字で入力してください(3つ目)',
            'tel3.max' => '電話番号は5桁までの数字で入力してください(3つ目)',
            'address.required' => '住所を入力してください',
            'address.max' => '住所は255文字以内で入力してください',
            'building.max' => '建物名は255文字以内で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
