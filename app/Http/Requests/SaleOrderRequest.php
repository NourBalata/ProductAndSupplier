<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleOrderRequest extends FormRequest
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
        return [
            'place'=>'required',
            'supplier_id'=>'required',
            'product_id'=>'required',
            // 'final_total'=>'required',
        ];
    }
}
