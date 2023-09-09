<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
    {    return [
        'title_new'=>'required',
        'address'=>'required',
        'slug'=>'required',
        'details'=>'required',
        'summary'=>'required',
        'title'=>'required',


        'status_id'=>'required',
        'category_id'=>'required',
        'writer_id'=>'required',
        'language_id'=>'required',
        'type_id'=>'required',

        'image'=>'nullable|image|mimes:png,jpg,jpeg|max:2000',

        'date'=>'required',
        'datepublication'=>'required',
    
        
    ];
    }
}
