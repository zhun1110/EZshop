<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17blog-admin</title>
    <link rel="stylesheet" href="{{URL::asset('css/admin-login.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <div class="limit">
        <div class="login-container">
            <div class="bb-login">
                <form class="bb-form validate-form" action="/admin/adminlogin" method="post">
                 @csrf
                    <span class="bb-form-title p-b-26"> Ez-shop </span>
                    <span class="bb-form-title p-b-48">
                        <i class="mdi mdi-symfony"></i>
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="account">
                        <span class="bbb-input" data-placeholder="帳號"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="mdi mdi-eye show_password"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="bbb-input" data-placeholder="密碼">
                        </span>
                    </div>
                    <div class="login-container-form-btn">
                        <div class="bb-login-form-btn">
                            <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> 登入 </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<link rel="stylesheet" href="{{ mix('js/app.js') }}">
<script>
</script>