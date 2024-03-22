<?php

namespace App\Http\Requests;

use App\Rules\ValidateCpf;
use Illuminate\Foundation\Http\FormRequest;

class StorePhonebookRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'birthday' => 'required|date',
            'telephone' => 'required|min:10',
            'cpf' => ['required', 'min:11', new ValidateCpf()],
        ];
    }
}
