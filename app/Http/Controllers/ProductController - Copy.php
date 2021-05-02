<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\UsersImport;

class ProductController extends Controller
{
    public function ShowAllData()
    {
    	print_r("hello");
    	die;
    	return view('Product.store');
    }

    public function store(Request $request)
    // {
    //     $file = $request->file('file')->store('import');

    //     $import = new UsersImport;
    //     $import->import($file);

    //     if ($import->failures()->isNotEmpty()) {
    //         return back()->withFailures($import->failures());
    //     }
    //     return back()->withStatus('Import in queue, we will send notification after import finished.');
    }
}
