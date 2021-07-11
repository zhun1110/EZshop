<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function __construct()
    {
    }
    public function GetList()
    {
        $Product = Product::where('is_del', '=', 0)->get();
        return $Product->toArray();
    }
    public function create($data)
    {
        $Product = new Product;
        $Product->product_name = $data->input('product_name');
        $Product->explanation  = $data->input('explanation');
        $Product->quantity     = $data->input('quantity');
        $Product->price        = $data->input('price');
        $Product->category     = $data->input('category');
        $Product->is_del       = '0';
        $Product->save();
    }
    public function show($id){
        $Product = Product::where('id', '=', $id)->first();
        return $Product->toArray();
    }
    public function edit($data){
        Product::where('id', '=', $data->input('id'))->update([
            'product_name'=> $data->input('product_name'),
            'explanation'=> $data->input('explanation'),
            'quantity'=> $data->input('quantity'),
            'price'=> $data->input('price'),
            'category'=> $data->input('category'),
        ]);

    }
    public function del($id){
        Product::where('id', '=', $id)->update([
            'is_del'=> '1'
        ]);
    }
    public function getdatalist($ids){
        $Products = Product::whereIn('id',$ids)->get();
        return $Products->toArray();
    }
    public function Buy($request){
        return true ;
    }
}
