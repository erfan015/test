<?php

namespace App\Http\Controllers;

use App\Models\myorder;
use App\Models\variantoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class MyorderController extends Controller
{
    public function indexorder( $id, Request $request)
    {
             $addorder= new myorder();
             $addorder->product_id=$id;
             $addorder->customer_name=$request->customername;
             $addorder->myproduct_name=$request->product;
             $addorder->price=$request->productprice;
             $addorder->orderstatus=$request->stsorder;
             $addorder->save();
             if ($addorder==true)
             {
                 return response()->json(['پیغام:'=>['درخواست شما ثبت شد']],'200');

             }
             else
             {
                 echo 'لطفا اطلاعات را با دقت وارد کنید';
             }
    }


    public function index()
    {
        $order=myorder::all();
        return response()->json(['درخواست شما:'=>['myorder'=>$order]],'200');

    }
}
