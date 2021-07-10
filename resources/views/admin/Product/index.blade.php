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
            <a class="navbar-brand" href="#">{{ Auth::guard('admin')->user()->name }}</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="#">登出</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<div class="row">
<div class="col-2">
    <ul class="list-group">
    <li class="list-group-item active" aria-current="true">商品管理</li>
    </ul>
</div>
<div class="col-8">
    <button type="button" onclick="location.href='/admin/product/store'" class="btn btn-primary" href>建立商品</button>

    <table class="table" style="margin-top: 10px;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">商品名稱</th>
            <th scope="col">商品圖片</th>
            <th scope="col">價格</th>
            <th scope="col">庫存(剩餘數量)</th>
            <th scope="col">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ProductData as $val)
            <tr>
                <th scope="row">{{$val['id']}}</th>
                <td>{{$val['product_name']}}</td>
                <td>{{$val['explanation']}}</td>
                <td>{{$val['price']}}</td>
                <td>{{$val['quantity']}}</td>
                <td>
                    <button onclick="location.href='/admin/product/show/{{ $val['id'] }}'" type="button" class="btn btn-success">編輯</button>
                    <button onclick="location.href='/admin/product/del/{{ $val['id'] }}'" type="button" class="btn btn-danger">刪除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>