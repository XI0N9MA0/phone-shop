<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvoiceProduct;
use Illuminate\Http\Request;


class InvoiceProductController extends Controller
{
    
    public function list()
    {
        $invoiceProduct = InvoiceProduct::get();
        
        return response()->json($invoiceProduct);
    }
    public function create(Request $request)
    {
        $invoiceProduct = new InvoiceProduct();

        $invoiceProduct-> invoice_date = $request->invoice_date;
        $invoiceProduct-> total_amount = $request->total_amount;

        $invoiceProduct->save();
        return response()->json('create success');

    }

    public function update(Request $request)
    {
        $invoiceProduct = new InvoiceProduct();

        $invoiceProduct-> invoice_date = $request->invoice_date;
        $invoiceProduct-> total_amount = $request->total_amount;

        $invoiceProduct->update();
        return response()->json('update success');

    }

     public function destroy(Request $request)
    {
        $invoiceProduct = InvoiceProduct::findorfail($request->id)->delete();

        return response()->json("delete success");

    }
}