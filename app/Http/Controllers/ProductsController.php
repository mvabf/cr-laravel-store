<?php

namespace App\Http\Controllers;

use App\Services\StoreApiRequestService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->data = new StoreApiRequestService();
    }

    public function index(Request $request)
    {

        dd($this->data->getProductsData());

        return response()->json(["message" => "hello from controller"]);
    }
}
