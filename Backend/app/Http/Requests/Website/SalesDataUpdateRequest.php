<?php

namespace App\Http\Requests\Website;

use App\Models\SalesData;
use Illuminate\Foundation\Http\FormRequest;

class SalesDataUpdateRequest extends FormRequest
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
            'product' => 'sometimes|string|max:255',
            'q1_sales' => 'sometimes|numeric|min:0',
            'q2_sales' => 'sometimes|numeric|min:0',
            'q3_sales' => 'sometimes|numeric|min:0',
            'q4_sales' => 'sometimes|numeric|min:0',
            'target' => 'sometimes|numeric|min:0',
        ];
    }

    /**
     * Update an existing SalesData record.
     */
    public function updateSalesData(SalesData $salesData): SalesData
    {
        $salesData->update($this->only([
            'product',
            'q1_sales',
            'q2_sales',
            'q3_sales',
            'q4_sales',
            'target',
        ]));

        return $salesData;
    }
}
