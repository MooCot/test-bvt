<?php

namespace App\Http\Validators;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Country;

class UserRequest extends ApiFormRequest
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
            'company_name' => ['required', 
                                'string',
                                function ($attribute, $value, $fail) {
                                    $country = Country::findCountryByName($value);
                                    if (empty($country)) {
                                        $fail('there is no such country');
                                    }
                                },
            ],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
