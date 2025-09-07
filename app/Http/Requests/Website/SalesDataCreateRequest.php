<?php

namespace App\Http\Requests\Website;

use App\Models\SalesData;
use Illuminate\Foundation\Http\FormRequest;

class SalesDataCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Set to true to allow the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product' => 'required|string|max:255',
            'q1_sales' => 'required|numeric|min:0',
            'q2_sales' => 'required|numeric|min:0',
            'q3_sales' => 'required|numeric|min:0',
            'q4_sales' => 'required|numeric|min:0',
            'target' => 'required|numeric|min:0',
        ];
    }

    /**
     * Store a new SalesData record.
     */
    public function storeSalesData(): SalesData
    {
        return SalesData::create([
            'product' => $this->input('product'),
            'q1_sales' => $this->input('q1_sales'),
            'q2_sales' => $this->input('q2_sales'),
            'q3_sales' => $this->input('q3_sales'),
            'q4_sales' => $this->input('q4_sales'),
            'target' => $this->input('target'),
        ]);
    }
}
