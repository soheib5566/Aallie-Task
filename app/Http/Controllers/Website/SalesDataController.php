<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
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

    public function store() {}

    public function update() {}

    public function destroy() {}
}
