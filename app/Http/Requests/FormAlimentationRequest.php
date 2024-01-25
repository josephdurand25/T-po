<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAlimentationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'type_aliment' => ['required'],
            'nbr_sac' => ['required','integer','min:1'],
            'prix_unit' => ['required','integer'],
        ];
    }

    public function messages(){
        return [
            'type_aliment.required' => "Type d'aliment requis.",
            'nbr_sac.required' => "Nombre de sacs d'aliment requis.",
            'nbr_sac.integer' => "Le nombre de sac doit être un nombre.",
            'nbr_sac.min' => "Le nombre de sac est inférieur à 1.",
            'prix_unit.required' => "Prix unitaire de l'aliment requis.",
            'prix_unit.integer' => "Le prix unitaire doit être un nombre",
        ];
    }
}
