<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AdminService;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    protected $AdminService;

    public function __construct(AdminService $AdminService)
    {
        $this->AdminService = $AdminService;
    }
    public function index(){
        echo '後台首頁' ; 
    }
    public function AdminLoginView()
    {
        $user = Auth::user();
        return view('/admin/login');
    }
    public function AdminLogin(Request $request)
    {
        return $this->AdminService->AdminVerification($request);
    }
    public function GetCSRF()
    {
        return csrf_token();
    }
}
