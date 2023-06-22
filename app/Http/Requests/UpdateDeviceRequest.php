<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceRequest extends FormRequest
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
    // dd($this->device);
    $device_id= $this->device->id;
        return [
            'ma_device'=>'required|string|unique:devices,ma_device,'.$device_id,
            'name_device'=>'required|string|unique:devices,name_device,'.$device_id,
            'address_ip'=>'required',
            'id_option'=>'required|integer|exists:options,id',
            'name_dangnhap'=>'required|string',
            'password'=>'required',
            'device_sd'=>'required|string',

        ];

    }
    public function messages(): array
    {
        return [
            'ma_device.required'=>':attribute không được để trống',
            'ma_device.unique'=>':attribute đã tồn tại',



        ];
    }
    public function attributes(): array
    {
        return [
            'ma_device'=>'mã thiết bị',



        ];
    }

}
