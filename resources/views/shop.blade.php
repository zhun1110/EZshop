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
        <li class="carnum"></li>
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
<div class="col-2">
    <ul class="list-group">
    <li class="list-group-item active" aria-current="true">商品</li>
    
    </ul>
</div>
<div class="col-8">
@foreach($ProductData as $val )
<div class="row">
<div class="card" style="width: 18rem;">
  <img src="{{url('/images/demo.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$val['product_name']}}</h5>
    <p class="card-text">{{$val['explanation']}}</p>
    <p class="card-text">價格: {{$val['price']}}</p>
    <p class="card-text">庫存: {{$val['quantity']}}</p>
    <a href="/product/{{$val['id']}}" class="btn btn-primary">購買</a>
    <button data-product="'{{$val['id']}}'" class="btn btn-success add-cart">加入購物車</button>
  </div>
  </div>
@endforeach
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
$(document).ready(function(){
  $( ".add-cart" ).click(function() {
      var product = $(this).data('product');
      var ShoppingCartCookie = $.cookie('ShoppingCart');

    if(ShoppingCartCookie == undefined){ //如果先前沒有加入購物車過
      var ShoppingCart = {};
      ShoppingCart.list = [{id:product}] ;
      var str = JSON.stringify(ShoppingCart) ;
      $.cookie('ShoppingCart', str);
      return alert('加入成功');
    }else{
      ShoppingCart = JSON.parse(ShoppingCartCookie);
      var repeat = {}  ; 
      repeat.status = true ; 

      $.each( ShoppingCart.list, function( key, value ) {
        if(value.id == product){
          alert('你已經有將該項商品加入過購物車囉');
          repeat.status = false ; 
          return false ;
        }
      });
      if(repeat.status){
        var add = {id:product} ; 
        ShoppingCart.list.push(add)
        var str = JSON.stringify(ShoppingCart) ;
        $.cookie('ShoppingCart', str);
        return alert('加入成功');
      }
    }
  });
});
</script>
</html>