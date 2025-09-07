<?php

namespace App\Http\Resources\Website;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SalesDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product' => $this->product,
            'q1_sales' => $this->q1_sales,
            'q2_sales' => $this->q2_sales,
            'q3_sales' => $this->q3_sales,
            'q4_sales' => $this->q4_sales,
            'target' => $this->target,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
