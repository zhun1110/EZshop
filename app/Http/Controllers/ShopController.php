<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Cookie;
class ShopController extends Controller
{
    protected $ProductService;
    public function __construct(ProductService $ProductService)
    {
        $this->ProductService = $ProductService ; 
    }
    public function Index()
    {
        $result  = [];
        $result['ProductData'] = $this->ProductService->GetList();
        return view('shop', $result);
    }
    public function show($id){
        $Product = $this->ProductService->show($id);
        return  view('productview',$Product);
    }
    public function shoppingcart(Request $request){
        $result = [];
        if(isset($_COOKIE['ShoppingCart']) && $_COOKIE['ShoppingCart'] !== ''){
            $ShoppingCart = json_decode($_COOKIE['ShoppingCart'], true);
            $ary = [];
            foreach($ShoppingCart['list'] as $key => $val){
                $str = str_replace("'", "", $val['id']);
                array_push($ary,$str);
            }
            $result['Product'] = $this->ProductService->getdatalist($ary);

        }else{
            return false ;
        }
        return view('shoppingcart',$result);
    }
    public function buy(Request $request){
        return view('end');
    }
}
