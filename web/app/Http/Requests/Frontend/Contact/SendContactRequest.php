<?php

namespace App\Http\Requests\Frontend\Contact;

use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SendContactRequest.
 */
class SendContactRequest extends FormRequest
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
//        return [
//            'name' => ['required'],
//            'email' => ['required'],
//            'message' => ['required'],
//            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule()] : ''),
//        ];
    }
}
