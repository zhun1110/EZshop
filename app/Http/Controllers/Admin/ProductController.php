<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $ProductService;

    public function __construct(ProductService $ProductService)
    {
        $this->ProductService = $ProductService;
    }
    public function index()
    {
        $result  = [];
        $result['ProductData'] = $this->ProductService->getList();
        return view('/admin/Product/index', $result);
    }
    public function store()
    {
        return view('/admin/Product/add');
    }
    public function show($id)
    {
        $Product = $this->ProductService->show($id);
        return view('/admin/Product/edit', $Product);
    }
    public function del($id)
    {
        $Product = $this->ProductService->del($id);
        return redirect()->route('product');
    }
    public function create(Request $require)
    {
        $this->ProductService->create($require);
        return redirect()->route('product');
    }
    public function edit(Request $require)
    {
        $this->ProductService->edit($require);
        return redirect()->route('product');
    }

}
