<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'ProductName' => 'required',
            'SupplierId' => 'required',
            'UnitPrice' => 'gt:0'
        ];
        $messages = [
            'ProductName.required' => 'product name is required',
            'SupplierId.required' => 'Supplier Id is required',
            'UnitPrice.gt' => 'UnitPrice must be positive',
        ];

        $validator = Validator::make([
            "ProductName" => $request->ProductName,
            "SupplierId" => $request->SupplierId,
            "UnitPrice" => floatval($request->UnitPrice)
        ], $rules, $messages);

        if ($validator->fails()) {

            return [
                "status" => 422,
                "errors" => $validator->errors()
            ];

            // return $validator->errors();
        }

        $newProductId = Product::create([
            'ProductName' => $request->ProductName,
            'SupplierId' => $request->SupplierId,
            'UnitPrice' => $request->UnitPrice
        ])->id;
        return [
            "status" => 200,
            "data" => $newProductId
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //do validation here
        $product = Product::find($id);
        $product->update([
            'ProductName' => $request->ProductName,
            'SupplierId' => $request->SupplierId,
            'UnitPrice' => $request->UnitPrice,
        ]);
        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product != null) {
            $product->delete();
            return "ok";
        } else {
            return "not ok";
        }
    }
}
