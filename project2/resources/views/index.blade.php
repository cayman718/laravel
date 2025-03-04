<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello
    <hr>
    <br>
    @php
    //dd($data);
    @endphp

    @foreach($data as $value)
    {{value['id']}}<br>
    {{value['name']}}<br>
    {{value['mobile']}}<br>
    <hr><br>
    @endforeach
</body>

</html>