<?php
namespace App\Http\Requests\Archivos;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePacientesRequest extends FormRequest
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
            'dni' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'telefono' => 'required',
            'fechanac' => 'required',
            'gradoinstruccion' => 'required',
            'ocupacion' => 'required',
            'edocivil' => 'required',
         
         
        ];
    }
}
