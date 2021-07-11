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
<h1>結帳頁面</h1>
<div class="row">
<div class="col-8">
<form action="/buy" method="post">
    @csrf
    <table class="table" style="margin-top: 10px;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">商品名稱</th>
            <th scope="col">商品說明</th>
            <th scope="col">價格</th>
            <th scope="col">購買數量</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Product as $val)
            <tr>
                <th scope="row">{{$val['id']}}</th>
                <td>{{$val['product_name']}}</td>
                <td>{{$val['explanation']}}</td>
                <td>{{$val['price']}}</td>
                <td>{{$val['quantity']}}</td>
                <td>
                    <input name="quantity[]" type="" value="1">
                </td>
                <input name="id[]" type="text" style="display:none" value="{{$val['id']}}">
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-success">購買</button>
    </form>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>