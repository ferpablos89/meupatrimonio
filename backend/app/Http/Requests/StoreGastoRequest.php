<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGastoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_categoria_gasto' => 'required|numeric|min:1|exists:categoria_gastos,id',
            'valor' => 'required|float|min:0',
            'data' => 'required|date',
            'descricao' => 'nullable|string',
        ];
    }
}
