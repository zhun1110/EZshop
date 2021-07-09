<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminAccount;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Index()
    {
        $AdminAccount = AdminAccount::all();
    }

    public function AdminLoginView()
    {
        return view('/admin/login');
    }
    public function AdminLogin(Request $request)
    {
        
        $AdminAccount = AdminAccount::where('account', '=', $request->account)
            ->where('password', '=', $request->password)
            ->first();
 
        if ($AdminAccount !== null) {
            echo '帳號密碼存在';
        } else {
            echo '帳號密碼不存在';
            $error_msg = [
                'msg' => [
                    '帳號輸入錯誤',
                ],
            ];
            return redirect()
                ->route('AdminLoginView')
                ->withErrors($error_msg)
                ->withInput();
        }
    }
    public function GetCSRF()
    {
        return csrf_token();
    }
}
