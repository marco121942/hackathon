<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClaimSheetRequest extends FormRequest
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
            'claim_date' => 'required',
            'name_patient' => 'required',
            'identification_document' => 'required|in:DNI,PASAPORTE,CE',
            'number_document' => 'required',
            'landline' => 'required',
            'cell_phone' => 'required',
            'email' => 'required|email',
            'detail' => 'required',
            'order' => 'required',
            'type' => 'required|in:RECLAMO,QUEJA',
            'observation' => 'required',
        ];
    }
}
