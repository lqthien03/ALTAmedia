<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
        // dd($this->role);
        $role_id = $this->role ? $this->role->id : null;
        return [
            'name_role'=>'required|string|unique:roles,name_role,'.$role_id,
            'mota'=>'required|string|unique:roles,mota,'.$role_id,
            'soluong'=>'required',

        ];
    }
    public function messages(): array
    {
        return[
            'name_role.required'=>':attribute không được để trống',
            'mota.required'=>':attribute không được để trống',
        ];
    }
    public function attributes():array
    {
        return[
            'name_role'=>'tên vai trò',

            'mota'=>'mô tả',
        ];
    }
}
