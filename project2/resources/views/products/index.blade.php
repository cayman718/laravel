<!DOCTYPE html>
<html>

<head>
    <title>商品列表</title>
</head>

<body>
    <h1>商品列表</h1>
    <a href="{{ route('products.create') }}">新增商品</a>

    <table border="1">
        <tr>
            <th>商品名稱</th>
            <th>操作</th>
        </tr>
        <tr>
            <td>商品1</td>
            <td>
                <a href="{{ route('products.show') }}">查看</a>
                <a href="{{ route('products.edit') }}">編輯</a>
            </td>
        </tr>
    </table>
</body>

</html>