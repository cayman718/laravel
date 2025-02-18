<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>資料顯示：</h3>
    @foreach($data as $key => $value)
    <p>{{ $key }}: {{ $value }}</p>
    @endforeach

    <p>
        <a href="f1">1F</a>
    </p>
    <p>
        <a href="">2F</a>
    </p>
    <p>
        <a href="">3F</a>
    </p>
</body>

</html>