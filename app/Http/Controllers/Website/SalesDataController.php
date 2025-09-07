<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\SalesDataCreateRequest;
use App\Http\Requests\Website\SalesDataUpdateRequest;
use App\Http\Resources\Website\SalesDataResource;
use App\Models\SalesData;
use Illuminate\Http\Request;

class SalesDataController extends Controller
{
    public function index()
    {
        $salesData = SalesData::all();
        return SalesDataResource::collection($salesData);
    }

    public function store(SalesDataCreateRequest $request)
    {
        return response()->json([
            'message' => 'SalesData created successfully',
            'sales_data' => new SalesDataResource($request->storeSalesData())
        ]);
    }

    public function update(SalesDataUpdateRequest $request, SalesData $salesData)
    {
        $updatedSalesData = $request->updateSalesData($salesData);

        return response()->json([
            'message' => 'SalesData updated successfully',
            'data' => new SalesDataResource($updatedSalesData),
        ], 200);
    }

    public function destroy(SalesData $salesData)
    {
        $salesData->delete();
        return response()->json(['message' => 'SalesData deleted successfully']);
    }
}
