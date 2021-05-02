<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class ProductController extends Controller
{
    public function ShowAllData()
    {
    	return view('store');
    }

    public function store(Request $request)
    {
        Excel::import(new ProductImport,request()->file('file'));
        
        return back()->withStatus('Imported Succesfully!.');
    }

    public function index()
    {
        $data  = DB::table('Product')->leftJoin('product_category','Product.category_id', '=' ,'product_category.id')->select('Product.*','product_category.id', 'product_category.name AS Pro_Name')->get();
        return view('show', ['pro_data' => $data]);
    }
}
