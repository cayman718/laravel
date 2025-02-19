<!DOCTYPE html>
<html>

<head>
    <title>編輯商品</title>
</head>

<body>
    <h1>編輯商品</h1>
    <form>
        商品名稱：<input type="text" name="name" value="商品1"><br>
        商品價格：<input type="number" name="price" value="100"><br>
        <button type="submit">更新</button>
    </form>
    <a href="{{ route('products.index') }}">返回列表</a>
</body>

</html>