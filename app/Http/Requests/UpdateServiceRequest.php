<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
        // dd($this->service);
        $service_id= $this->service->id;
        return [
            'ma_service'=>'required|string|unique:services,ma_service,'.$service_id,
            'name_service'=>'required|string|unique:services,name_service,'.$service_id,
            'mota'=>'required|string|unique:services,mota,'.$service_id,
            // 'id_progression'=>'required|integer',
            // 'start_count'=>'required|integer|unique:rule_progressions,start_count',
            // 'end_count'=>'required|integer|unique:rule_progressions,end_count',
            // 'prefix'=>'required|integer',
            // 'surfix'=>'required|integer',
            // 'is_prefix'=>'required',
            // 'is_surfix'=>'required',
            // 'is_reset'=>'requires',
            // 'is_auto_increase',
        ];
    }
    public function messages(): array
    {
        return[
            'ma_service.required'=>':attribute không được để trống',
            'name_service.required'=>':attribute đã tồn tại',
            'mota.required'=>':attribute không được để trống',
        ];
    }

    public function attributes():array
    {
        return[
            'ma_service'=>'mã thiết bị',
            'name_service'=>'tên thiết bị',
            'mota'=>'mô tả',
        ];
    }
}
