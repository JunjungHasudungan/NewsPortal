<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title'         => ['required', 'min:4', 'max:50'],
            'description'   => ['required' , 'min:10', 'max:50']
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Kolom Judul Wajib diisi..',
            'title.min'             => 'Judul min 4 karakter..',
            'title.mex'             => 'Judul maks 50 Karakter',
            'description.required'  => 'Kolom Keterangan Wajib diisi..',
            'description.min'       => 'Keterangan Min 10 Karakter..',
            'description.max'       => 'Keterangan Maks 50 Karakter...'
        ];
    }
}
