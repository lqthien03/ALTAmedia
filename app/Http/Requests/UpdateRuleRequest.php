<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRuleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rule_id=$this->user->id;
        return [

            'start_count'=>'required|integer|unique:rule_progressions,start_count,'.$rule_id,
            'end_count'=>'required|integer|unique:rule_progressions,end_count,'.$rule_id,
            'prefix'=>'required|integer',
            'surfix'=>'required|integer',
            'is_prefix'=>'required',
            'is_surfix'=>'required',
            'is_reset'=>'requires',
            'is_auto_increase',
        ];
    }
    public function messages(): array
    {
        return[

        ];
    }

    public function attributes():array
    {
        return[

        ];
    }
}
