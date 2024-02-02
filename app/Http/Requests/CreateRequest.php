<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:254'],
            'content' => ['required', 'string', 'max:254'],
        ];
    }

    /**
     * Get Data
     */
    public function getData() : array
    {
        $data = $this->all();
        $data['posted_by'] = auth()->user()->id;
        return $data;
    }
}
