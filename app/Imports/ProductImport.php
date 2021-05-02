<?php

namespace App\Imports;

use App\Product;
use App\Product_Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class ProductImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $cat = new Product_Category;
        $cat->name=$row['categoryid'];
        $cat->created_at=now();
        $cat->save();

        $id=DB::table('Product_Category')->select('id')->first('desc','id');

        return new Product([
            'name' => $row['name'],
            'description' => $row['discription'],
            'unique_code' => $row['uniquecode'],
            'category_id' => isset($id->id) ? $id->id : 1,
            'created_at' => now(),
            'update_at' => NULL
        ]);
        
    }
}
