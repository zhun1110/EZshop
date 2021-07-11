<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡單商店</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">簡單商城</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="navbar-brand" href="#">使用者名稱</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="/shoppingcart">結帳</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="#">登出</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<div class="row">
<div style="padding: 20px;">
            <div class="mb-3">
                <label class="form-label">商品名稱</label>
                <p>{{$product_name}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">產品說明</label>
                <p>{{$explanation}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">庫存數量</label>
                <p>{{$quantity}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">價格</label>
                <p>{{$price}}</p>
            </div>
            <button type="submit" class="btn btn-primary">購買</button>
    </div>
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/path/to/jquery.cookie.js"></script>

<script>
$(document).ready(function(){
    var ShoppingCart = {};
  //購物車功能 cookie 
  // $.cookie('name', 'runoob');  // 创建 cookie
  
});
</script>
</html>