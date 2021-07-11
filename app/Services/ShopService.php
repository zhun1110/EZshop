<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;

class AdminService
{
    public function __construct()
    {
    }
    public function AdminVerification($request)
    {
        
        $credentials = array('account' => $request->account, 'password' => $request->password);
        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->route('product');
        }else{
            $error_msg = [
                'msg' => [
                    '帳號輸入錯誤',
                ],
            ];
            return redirect()
                ->route('AdminLoginView')
                ->withErrors($error_msg)
                ->withInput();
        };
    }
}
