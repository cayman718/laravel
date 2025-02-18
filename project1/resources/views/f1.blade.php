<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Hi F1</h3>
    @if(isset($message))
    <p>{{ $message }}</p>
    @endif
    <p>
        <a href="/">back</a>
    </p>
</body>

</html>