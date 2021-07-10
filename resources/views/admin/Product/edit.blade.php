<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡單商店</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div style="padding: 20px;">
        <form action="/admin/product/edit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <div class="mb-3">
                <label class="form-label">商品名稱</label>
                <input type="text" name="product_name" class="form-control" value="{{$product_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">產品說明</label>
                <input type="explanation" name="explanation" class="form-control" value="{{$explanation}}">
            </div>
            <div class="mb-3">
                <label class="form-label">數量</label>
                <input type="number" min="0" name="quantity" class="form-control" value="{{$quantity}}">
            </div>

            <div class="mb-3">
                <label class="form-label">分類</label>
                <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="1">分類1</option>
                    <option value="2">分類2</option>
                    <option value="3">分類3</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">價格</label>
                <input type="number" min="0" name="price" class="form-control" value="{{$price}}">
            </div>
            <button type="submit" class="btn btn-primary">編輯</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>