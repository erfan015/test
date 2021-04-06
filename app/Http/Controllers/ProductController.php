<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\variant;
use App\Models\variantoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;


class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->join('variant','products.id','=','variant.product_id')
            ->join('variantoptions','products.id','=','variantoptions.product_id')
            ->select('products.product_name','variant.variant_name','variantoptions.variantoption_name')->get();
//        $products=product::all();
        return response()->json(['message'=>['product'=>$products]]);

    }

    public function listofproducts()
    {
        $products=product::all();
        return response()->json(['products us:'=>['product'=>$products]]);
    }

//
}
