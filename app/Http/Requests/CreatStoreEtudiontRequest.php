<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatStoreEtudiontRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nom' => 'required|max:10',
            'prenom' => 'required|max:10',
            'lage' => 'required|integer|between:18,30',
            'adresse' => 'required|max:50',
            'telephone' => 'required|max:20',
            'prof_id' => 'required|integer',
            'cour_id' => 'required|integer',
            'classe_id' => 'required|integer',
        ];
    }
    
    public function messages(){
        return [
            'nom.max' => 'Le nom est supérieur à 10',
            'prenom.max' => 'Le prenom est supérieur à 10',
            'lage.between' => 'Lâge doit être compris entre 18 et 30 ans',
            'adresse.max' => 'Le nom est supérieur à 50',
            'telephone.max' => 'sil vous plaît entrer un numéro de téléphone valide',
            'prof_id.integer' => 'Veuillez sélectionner un prof',
            'cour_id.integer' => 'Veuillez sélectionner un course',
            'classe_id.integer' => 'Veuillez sélectionner un classe',
        ];
    }
}
