<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user_id=$this->user->id;
        return [
            'name'=>'required|string|unique:users,name,'.$user_id,
            'sdt'=>'required|string|unique:users,sdt',
            'email'=>'required|string',
            'role_id'=>'required|integer',
            'name_dangnhap'=>'required|string',
            'password'=>'required|string',
            'id_option_device'=>'requires|integer',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>':attribute không được để trống',
            'sdt.required'=>':attribute đã tồn tại',
            'email.required'=>':attribute không được để trống',
            'role_id'=>':attribute không được để trống',
            'name_dangnhap'=>':attribute không được để trống',
            'password'=>':attribute không được để trống',
            'id_option_device'=>':attribute không được để trống',
        ];
    }

    public function attributes():array
    {
        return[
            'name'=>'tên',
            'sdt'=>'số điện  thoại',
            'email'=>'gmail',
            'role_id'=>'vai trò',
            'name_dangnhap'=>'tên đăng nhập',
            'password'=>'mật khẩu',
            'id_option_device'=>'trạng thái'
        ];
    }
}
