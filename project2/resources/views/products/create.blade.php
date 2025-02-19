<!DOCTYPE html>
<html>

<head>
    <title>新增商品</title>
</head>

<body>
    <h1>新增商品</h1>
    <form>
        商品名稱：<input type="text" name="name"><br>
        商品價格：<input type="number" name="price"><br>
        <button type="submit">新增</button>
    </form>
    <a href="{{ route('products.index') }}">返回列表</a>
</body>

</html>